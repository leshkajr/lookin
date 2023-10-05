
const calendar = document.getElementById('calendar');
const currentMonth = document.getElementById('currentMonth');

let selectedDates = [];

const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

// Функция для создания календаря
function createCalendar(year, month) {

    let url = new URL(window.location.href);
    const getArrivalDate = new Date(parseInt(url.searchParams.get('arrivalDate')));
    const getDepartureDate = new Date(parseInt(url.searchParams.get('departureDate')));

    console.log(getArrivalDate);

    let startDate;
    let endDate;

    if(selectedDates.length === 0){
        selectedDates.push(getArrivalDate);
        selectedDates.push(getDepartureDate);

        startDate = new Date(getArrivalDate.getFullYear(), month, 0);
        endDate = new Date(getArrivalDate.getFullYear(), month + 1, 0);
    }
    else{
        startDate = new Date(selectedDates[0].getFullYear(), month, 0);
        endDate = new Date(selectedDates[0].getFullYear(), month + 1, 0);
    }
    console.log("selectedDates", selectedDates)

    if(selectedDates.length === 2){
        let diffTime;
        if(selectedDates[0].getTime() < selectedDates[1].getTime()){
            diffTime = Math.abs(selectedDates[1] - selectedDates[0]);
        }
        else{
            diffTime = Math.abs(selectedDates[0] - selectedDates[1]);
        }
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        document.getElementById("night").textContent = ": " + diffDays + " " + night;
    }

    $tmp_date = new Date(new Date().setDate(getArrivalDate.getDate() + 1));
    document.getElementById("dateArrivalInput").value = $tmp_date.toISOString().substring(0,10);
    document.getElementById("dateArrivalInput").setAttribute("min", today.toISOString().substring(0,10));
    $tmp_date = new Date(new Date().setDate(getDepartureDate.getDate() + 1));
    document.getElementById("dateDepartureInput").value = $tmp_date.toISOString().substring(0,10);


    currentMonth.textContent = monthNames[month];


    const daysInMonth = endDate.getDate();
    const firstDayIndex = startDate.getDay();

    calendar.innerHTML = '';

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
            if (selectedDates[j].getTime() === currentIDate.getTime()) {
                dayDiv.classList.add('selected');
            }
        }

        dayDiv.addEventListener('click', () => {
            if (selectedDates.length <= 2) {
                const selectedDate = new Date(year, month, i);

                // Проверяем, есть ли уже класс 'selected' на элементе
                if (dayDiv.classList.contains('selected')) {
                    dayDiv.classList.remove('selected'); // Удаляем класс 'selected'
                    selectedDates = selectedDates.filter(date => !isSameDate(date, selectedDate));
                    console.log('remove selectedDates',selectedDates);
                } else if (selectedDates.length < 2) {
                    dayDiv.classList.add('selected'); // Добавляем класс 'selected'
                    selectedDates.push(selectedDate);
                }

                updateSelectedDates();
            }
        });

        calendar.appendChild(dayDiv);
    }

    if(!url.searchParams.has('guests')){
        url.searchParams.append('guests', "1");
        window.location.href = url;
    }
}

function updateSelectedDates() {
    if (selectedDates.length === 1) {

    } else if (selectedDates.length === 2) {
        let url = new URL(window.location.href);
        if(!url.searchParams.has('arrivalDate')){
            url.searchParams.append('arrivalDate', selectedDates[0].getTime());
            url.searchParams.append('departureDate', selectedDates[1].getTime());
        }
        else{
            url.searchParams.set('arrivalDate', selectedDates[0].getTime());
            url.searchParams.set('departureDate', selectedDates[1].getTime());
        }
        window.location.href = url;
    }
}
function isSameDate(date1, date2) {
    return (
        date1.getDate() === date2.getDate() &&
        date1.getMonth() === date2.getMonth() &&
        date1.getFullYear() === date2.getFullYear()
    );
}

const today = new Date();
let night;
function startCalendar(t_night){
    console.log('startCalendar');
    night = t_night;
    createCalendar(today.getFullYear(), today.getMonth());
}

// Вызываем createCalendar с предыдущим месяцем
document.getElementById('prevMonth').addEventListener('click', () => {
    console.log('prevMonth');
    today.setMonth(today.getMonth() - 1);
    createCalendar(today.getFullYear(), today.getMonth());
});

// Вызываем createCalendar с следующим месяцем
document.getElementById('nextMonth').addEventListener('click', () => {
    console.log('nextMonth clicked');
    today.setMonth(today.getMonth() + 1);
    createCalendar(today.getFullYear(), today.getMonth());
});

async function check(e) {
    await sleep(1);
    let v = parseInt(e.value);
    if (v < 1) e.value = 1;
    if (v > 9) e.value = 9;
    if(isNaN(v)) e.value = 1;
}

function number_counter(idInput,action){
    let input = document.getElementById(idInput);
        if(action === "plus"){
            input.value = parseInt(input.value) + 1;
        }
        else if(action === "minus"){
            input.value = parseInt(input.value) - 1;
        }

    check(input);

    let url = new URL(window.location.href);
    url.searchParams.set('guests', input.value);
    window.location.href = url;
}
