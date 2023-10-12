let isFirstEnter = 0;
let selectedDates = [];

const monthNamesEng = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];
const monthNamesUkr = ["Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень",
    "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень"
];

const daysOfWeekNamesEng = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"];
const daysOfWeekNamesUkr = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Нд"];

let url = new URL(window.location.href);
// Функция для создания календаря
function createCalendar(year, month, id) {
    isFirstEnter++;
    let calendar;
    let currentMonth;
    let daysOfWeek;
    if(id === 1){
        calendar = document.getElementById('calendar-main-1');
        currentMonth = document.getElementById('currentMonth-main-1');
    }
    else if(id === 2){
        calendar = document.getElementById('calendar-main-2');
        currentMonth = document.getElementById('currentMonth-main-2');
    }

    let startDate;
    let endDate;
    console.log(selectedDates.length);
    if(url.searchParams.get('arrivalDate') !== null && url.searchParams.get('departureDate') !== null &&
        selectedDates.length !== 2){

        const getArrivalDate = new Date(parseInt(url.searchParams.get('arrivalDate')));
        const getDepartureDate = new Date(parseInt(url.searchParams.get('departureDate')));

        console.log(getArrivalDate);

        if(selectedDates.length === 0){
            selectedDates.push(getArrivalDate);
            selectedDates.push(getDepartureDate);
        }
        startDate = new Date(selectedDates[0].getFullYear(), selectedDates[0].getMonth(), 0);
        endDate = new Date(selectedDates[0].getFullYear(), selectedDates[0].getMonth() + 1, 0);
        console.log("selectedDates", selectedDates)
    }
    else{
        startDate = new Date(year, month, 0);
        endDate = new Date(year, month + 1, 0);
    }
    console.log("id "+ id,endDate)
    console.log("month ",month);
    if(language === 'en'){
        if(month === 12){
            currentMonth.textContent = monthNamesEng[0] + " " + (year + 1);
        }
        else
            currentMonth.textContent = monthNamesEng[month] + " " + year;
        daysOfWeek = daysOfWeekNamesEng;
    }
    else if(language === 'ua'){
        if(month === 12) {
            currentMonth.textContent = monthNamesUkr[0] + " " + (year + 1);
        }
        else
        currentMonth.textContent = monthNamesUkr[month] + " " + year;
        daysOfWeek = daysOfWeekNamesUkr;
    }

    if(selectedDates.length === 2){
        let diffTime;
        if(selectedDates[0].getTime() < selectedDates[1].getTime()){
            diffTime = Math.abs(selectedDates[1] - selectedDates[0]);
        }
        else{
            diffTime = Math.abs(selectedDates[0] - selectedDates[1]);
        }
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    }




    const daysInMonth = endDate.getDate();
    const firstDayIndex = startDate.getDay();

    calendar.innerHTML = '';
    for (let i = 0; i < daysOfWeek.length; i++) {
        const dayDiv = document.createElement('div');
        dayDiv.classList.add('dayOfWeek');
        dayDiv.textContent = daysOfWeek[i];
        calendar.appendChild(dayDiv);
    }

    for (let i = 0; i < firstDayIndex; i++) {
        const dayDiv = document.createElement('div');
        dayDiv.classList.add('day');
        dayDiv.classList.add('cannot-selected');
        calendar.appendChild(dayDiv);
    }


    for (let i = 1; i <= daysInMonth; i++) {
        const dayDiv = document.createElement('div');
        dayDiv.classList.add('day');
        dayDiv.textContent = i;
        for (let j = 0; j < selectedDates.length; j++) {
            let currentIDate = new Date(selectedDates[j].getFullYear(), month, i);
            if (selectedDates[j].getMonth() === currentIDate.getMonth() && selectedDates[j].getDate() === currentIDate.getDate()) {
                dayDiv.classList.add('selected');
                if(j === 0)
                    dayDiv.classList.add('date-arrival');
                else if(j === 1)
                    dayDiv.classList.add('date-departure');

                updateSelectedDates();
            }
        }

        if(new Date(year,month,i).getTime() >= new Date().getTime()){
            dayDiv.addEventListener('click', () => {
                if (selectedDates.length <= 2) {
                    const selectedDate = new Date(year, month, i);

                    if (dayDiv.classList.contains('selected')) {
                        dayDiv.classList.remove('selected');
                        selectedDates = selectedDates.filter(date => !isSameDate(date, selectedDate));
                        url.searchParams.delete('arrivalDate');
                        url.searchParams.delete('departureDate');
                        console.log('remove selectedDates',selectedDates);
                    } else if (selectedDates.length < 2) {
                        dayDiv.classList.add('selected');
                        selectedDates.push(selectedDate);
                        if(selectedDates.length === 1)
                            dayDiv.classList.add('date-arrival');
                        else if(selectedDates.length === 2)
                            dayDiv.classList.add('date-departure');
                    }

                    updateSelectedDates();
                }
            });
        }
        else{
            dayDiv.classList.add('dayDisabled')
        }
        calendar.appendChild(dayDiv);
    }
}

function updateSelectedDates() {
    if(selectedDates.length === 0){
        if(!url.searchParams.has('arrivalDate')){
            url.searchParams.delete('arrivalDate');
        }

        main_when_arrival_description.children[0].style.display = 'block';
        main_when_arrival_description.children[1].style.display = 'none';
        main_when_arrival_description.children[2].style.display = 'none';


        main_when_departure_description.children[0].style.display = 'block';
        main_when_departure_description.children[1].style.display = 'none';
        main_when_departure_description.children[2].style.display = 'none';

        main_when_arrival_description.children[1].textContent = "";
        if(!header_text_container_when_arrival.classList.contains('m-s-h-container-active')) {
            header_text_container_where.classList.remove('m-s-h-container-active');
            header_text_container_when_arrival.classList.add('m-s-h-container-active');
            header_text_container_when_departure.classList.remove('m-s-h-container-active');
            header_text_container_guests.classList.remove('m-s-h-container-active');
        }
    }
    else if (selectedDates.length === 1) {
        if(!url.searchParams.has('arrivalDate')){
            url.searchParams.append('arrivalDate', selectedDates[0].getTime());
        }
        else{
            url.searchParams.set('arrivalDate', selectedDates[0].getTime());
        }
        main_when_arrival_description.children[0].style.display = 'none';
        main_when_arrival_description.children[1].style.display = 'block';
        main_when_arrival_description.children[2].style.display = 'flex';

        main_when_departure_description.children[0].style.display = 'block';
        main_when_departure_description.children[1].style.display = 'none';
        main_when_departure_description.children[2].style.display = 'none';

        main_when_arrival_description.children[1].textContent =
            monthNamesEng[selectedDates[0].getMonth()].substring(0,3) + " " + selectedDates[0].getDate();

        header_text_container_where.classList.remove('m-s-h-container-active');
        header_text_container_when_arrival.classList.remove('m-s-h-container-active');
        header_text_container_when_departure.classList.add('m-s-h-container-active');
        header_text_container_guests.classList.remove('m-s-h-container-active');
    } else if (selectedDates.length === 2) {
        if(!url.searchParams.has('departureDate')){
            url.searchParams.append('departureDate', selectedDates[1].getTime());
        }
        else{
            url.searchParams.set('departureDate', selectedDates[1].getTime());
        }
        main_when_arrival_description.children[0].style.display = 'none';
        main_when_arrival_description.children[1].style.display = 'block';
        main_when_arrival_description.children[2].style.display = 'flex';
        main_when_arrival_description.children[1].textContent =
            monthNamesEng[selectedDates[0].getMonth()].substring(0,3) + " " + selectedDates[0].getDate();

        main_when_departure_description.children[0].style.display = 'none';
        main_when_departure_description.children[1].style.display = 'block';
        main_when_departure_description.children[2].style.display = 'flex';

        main_when_departure_description.children[1].textContent =
            monthNamesEng[selectedDates[1].getMonth()].substring(0,3) + " " + selectedDates[1].getDate();

        header_text_container_where.classList.remove('m-s-h-container-active');
        header_text_container_when_arrival.classList.remove('m-s-h-container-active');
        header_text_container_when_departure.classList.remove('m-s-h-container-active');
        header_text_container_guests.classList.add('m-s-h-container-active');

        block_where.style.display = "none";
        block_when.style.display = "none";
        block_guests.style.display = "flex";
    }
}
function isSameDate(date1, date2) {
    return (
        date1.getDate() === date2.getDate() &&
        date1.getMonth() === date2.getMonth() &&
        date1.getFullYear() === date2.getFullYear()
    );
}

let today = new Date();
let language;
function startCalendar(t_language){
    language = t_language;
    if(url.searchParams.get('arrivalDate') !== null && url.searchParams.get('departureDate') !== null) {
        const getArrivalDate = new Date(parseInt(url.searchParams.get('arrivalDate')));
        today = getArrivalDate;
    }
    createCalendars(today.getFullYear(), today.getMonth());
}

function createCalendars(year, month){
    createCalendar(year, month,1);
    createCalendar(year, month + 1,2);

    let listings_dates = document.getElementsByClassName("listing-date");
    for (let listing_date of listings_dates) {
        if(selectedDates[0].getMonth() === selectedDates[1].getMonth())
            listing_date.textContent = selectedDates[0].getDate() + "-" + selectedDates[1].getDate() + " " + (monthNamesUkr[selectedDates[0].getMonth()]).toLowerCase().substring(0,4);
        else
            listing_date.textContent = selectedDates[0].getDate() + "-" + selectedDates[1].getDate() + " " + (monthNamesUkr[selectedDates[0].getMonth()]).toLowerCase().substring(0,4) + "-" + (monthNamesUkr[selectedDates[1].getMonth()]).toLowerCase().substring(0,4);
    }
}

// Вызываем createCalendar с предыдущим месяцем
document.getElementById('prevMonth-main').addEventListener('click', () => {
    console.log('prevMonth');
    today.setMonth(today.getMonth() - 1);
    createCalendars(today.getFullYear(), today.getMonth());
});

// Вызываем createCalendar с следующим месяцем
document.getElementById('nextMonth-main').addEventListener('click', () => {
    console.log('nextMonth clicked');
    today.setMonth(today.getMonth() + 1);
    createCalendars(today.getFullYear(), today.getMonth());
});


