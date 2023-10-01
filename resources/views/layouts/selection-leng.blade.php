<div class="counter_leng" id="menuleng">
<div class="div_counter">
 <div style="width: 80%;height: 100%;">
     @foreach($languages as $value)
         <div style="margin-top: 1%">{{$value->languageName}}</div>
     @endforeach
 </div>
</div>
</div>
