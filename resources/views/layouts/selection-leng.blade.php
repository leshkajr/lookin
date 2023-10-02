<div class="counter_leng" id="menuleng">
    <div class="div_counter"id="selectedLanguagesContainer">
        <ul style="width: 80%; height: 100%; list-style: none; padding: 0;">
            @foreach($languages as $value)
                <li style="margin-top: 1%;">{{$value->languageName}}</li>
            @endforeach
        </ul>
    </div>
</div>
