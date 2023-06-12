import React from "react";
import { useEffect, useState } from 'react';
//import FlipCard from 'react-countdown-flip-card';
import FlipCountdown from '@rumess/react-flip-countdown';


function FlipCountdowns(props) {

var seconds = "0";

  if(props.count != undefined){
    seconds = props.count.count;
  }

  let PauseSeconds = 0;
  let PauseMinutes = 0;
  let PauseHours = 0;
  let PauseDays =  0;
  let futurePauseMinutes = 0;
  let dateFuture = 0;
  let Userdatetime = 0;

  let TestDateTime = new Date();

  let CurrentDateTime;
 // console.log('future new test date');
  CurrentDateTime = new Date(
    TestDateTime.getTime() + props.values.WPtimeZoneOffset * 3600 * 1000
  );

  let UpdateCurrentDateTime = new Date(
    TestDateTime.getTime() + props.values.WPtimeZoneOffset * 3600 * 1000
  );
  let CurrentDateTimeSTR = parseFloat(
    Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
  );

  var Userdefinedatetime = parseFloat(
    Math.round(parseInt(Date.parse(props.values.date_time)) / 1000)
  );

  if (props.values.timer_type === "3") {

    CurrentDateTime = new Date(
      TestDateTime.getTime() + props.values.WPtimeZoneOffset * 3600 * 1000
    );

    CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );



 if(props.values.end_trigger_3 == "next_upcoming_event_end_date"){ 
      Userdefinedatetime = parseFloat(
       Math.round(parseInt(Date.parse(props.values.next_upcoming_event_get_date)) / 1000)
     );

  //   console.log(Userdefinedatetime,"Userdefinedatetime joshiiiii");
   }else if(props.values.end_trigger_3 == "woo_product_end_date"){


      if (props.values.woo_pro_end_date_get_data != null) {
 
           Userdefinedatetime = Date.parse((props.values.woo_pro_end_date_get_data) / 1000);
    
         
     }
     }else if(props.values.end_trigger_3 == "day_of_week"){


   if (props.values.day_of_week_timer_fixed != null) {

        Userdefinedatetime = parseFloat(
            Math.round(parseInt(Date.parse(props.values.day_of_week_timer_fixed)) / 1000)
        );
      
  }
  }else if(props.values.end_trigger_3 == "last_day_month"){ 

    var today = new Date();
    var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth()+1, 0);
    if(!!(props.values.end_time_month_3)){
      var end_time_month =  props.values.end_time_month_3 != "" ? props.values.end_time_month_3.split(':') : "";
      let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
      let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
      Userdefinedatetime = parseFloat(
        Math.round(parseInt(Date.parse(lastMonthFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );

    }else{
        Userdefinedatetime = parseFloat(
          Math.round(parseInt(Date.parse(lastDayOfMonth) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
    }
   
  }else if(props.values.end_trigger_3 == "custom_duration_end" ){ 

    if(props.values.start_trigger_3 == "date_time"){

        var date = new Date(props.values.start_date_time_3);

    }else if(props.values.start_trigger_3 == "day_of_week"){

        var date = new Date(props.values.day_of_week_timer_get_data);

    }else if(props.values.start_trigger_3 == "first_day_month"){
        var dateDay = new Date();
        var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
        if(!!(props.values.date_time_first_month_3)){
          var start_time_month =  props.values.date_time_first_month_3 != "" ? props.values.date_time_first_month_3.split(':') : "";
          let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
          let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
          var date = new Date(firstMonthFinal);
        // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
      }else{

        var date = new Date(firstDay);

      }
      var date = new Date(firstDay);
    }else if(props.values.start_trigger_3 == "immediately"){

      var date = new Date(2/3/1970);

    }else if(props.values.start_trigger_3 == "custom_duration_start"){
      var date = new Date(2/3/1970);
    }

    var addDays = props.values.expirey_days_3;
    var addHours = props.values.expirey_hours_3;
    var addMinutes = props.values.expirey_mins_3;
    var addSeconds = props.values.expirey_sec_3;
    date.setTime(date.getTime() + (addHours * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (addDays * 24 * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (addMinutes * 60 * 1000)); 
    date.setTime(date.getTime() + (addSeconds * 1000)); 

    Userdefinedatetime = parseFloat(
      Math.round(parseInt(Date.parse(date)) / 1000)
    );

 //  console.log(Userdefinedatetime,"date check nnn correct",date,"date");
  }else if(props.values.end_trigger_3 == "date_time"){ 
     Userdefinedatetime = props.values.user_defined_end_time;
  }else{

  }

  }else  if(props.values.timer_type === "2"){

    CurrentDateTime = new Date(
      TestDateTime.getTime() + props.values.WPtimeZoneOffset * 3600 * 1000
    );

    CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

      let future = 0;
      let updateFutureDate = 0;

   
if(props.values.pattern == "weekly"){

future = new Date(props.values.day_of_week_timer_get_data);

}else if(props.values.pattern == "daily"){

var date = new Date();
var Adddate = date.setDate(date.getDate() + 1)
  var AddDay = new Date(Adddate);
  var firstDaily = new Date(AddDay.getFullYear(), AddDay.getMonth(), AddDay.getDate());
  if(!!(props.values.start_time_daily)){
    var start_time_daily =  props.values.start_time_daily != "" ? props.values.start_time_daily.split(':') : "";
    let firstDailyHours =  new Date(new Date(firstDaily).setHours(firstDaily.getHours() + start_time_daily[0]));
    let firstDailyFinal =  new Date(new Date(firstDailyHours).setMinutes(firstDailyHours.getMinutes() + start_time_daily[1]));
     future = new Date(firstDailyFinal);
  // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
}else{
   future = new Date(firstDaily);
}

}else if(props.values.pattern == "yearly"){

  var dateDay = new Date();
  if(props.values.start_day_of_yearly == 'first'){
  var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
  var firstDay  =  new Date(new Date(firstDayYear).setMonth(props.values.pattern_start_month_yearly - 1));
  }else{
    var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
    var firstDayMonth =  new Date(new Date(firstDayYear).setMonth(props.values.pattern_start_month_yearly - 1));
    var firstDay  =  new Date(new Date(firstDayMonth).setDate(props.values.custom_start_day_yearly));
  }
 
  let firstDayOfMonth = new Date(firstDay);

  if(!!(props.values.start_time_yearly)){
   var start_time_month =  props.values.start_time_yearly != "" ? props.values.start_time_yearly.split(':') : "";
   let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
   let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
   future = new Date(firstMonthFinal);
 //  console.log(date,"date check ...");
   // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
 }else{
   future = new Date(firstDayOfMonth);
 }


}else if(props.values.pattern == "monthly"){

  var dateDay = new Date();
  if(props.values.start_day_of_month == 'first'){
    var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
  }else{
    var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
    var firstDay  =  new Date(new Date(firstDayYear).setDate(props.values.custom_start_day_month));
  }
 
  let firstDayOfMonth = new Date(firstDay);

  if(!!(props.values.start_time_monthly)){
   var start_time_month =  props.values.start_time_monthly != "" ? props.values.start_time_monthly.split(':') : "";
   let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
   let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
    future = new Date(firstMonthFinal);
 //  console.log(date,"date check ...");
   // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
 }else{
    future = new Date(firstDayOfMonth);
 }

 // future = new Date(date);

}else  if(props.values.start_trigger_2 == "date_time"){

      future = new Date(props.values.date_time_2);
    
    }else if(props.values.start_trigger_2 == "day_of_week"){

       future = new Date(props.values.day_of_week_timer_get_data);
     //  updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7, future.getHours(), future.getMinutes());
    }else if(props.values.start_trigger_2 == "first_day_month"){

      var dateDay = new Date();
      var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
      if(!!(props.values.date_time_first_month_2)){
        var start_time_month =  props.values.date_time_first_month_2 != "" ? props.values.date_time_first_month_2.split(':') : "";
        let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
        let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
         future = new Date(firstMonthFinal);
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{
       future = new Date(firstDay);
    }
    }else if(props.values.start_trigger_2 == "custom_duration_start"){

      if(props.values.end_trigger_2 == "date_time"){  
        var date = new Date(props.values.date_time);
     }else if(props.values.end_trigger_2 == "last_day_month"){
    
      let lastMonthDate = 0;
      var today = new Date();
      var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);
      if(!!(props.values.end_time_month_2)){
        var end_time_month =  props.values.end_time_month_2 != "" ? props.values.end_time_month_2.split(':') : "";
        let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
        let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
        lastMonthDate = lastMonthFinal;
        // var date = new Date();
        // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
      }else{
        lastMonthDate = lastDayOfMonth;
      }
        var date = new Date(lastMonthDate);
     }else if(props.values.end_trigger_2 == "day_of_week"){
    
     // if (props.values.day_of_week_timer_fixed != null) {
         var date = new Date(props.values.day_of_week_timer_fixed);
    // }
    
     }else{
      var date = new Date();
     }
    
      var addDays = props.values.start_expirey_days_2;
      var addHours = props.values.start_expirey_hours_2;
      var addMinutes = props.values.start_expirey_mins_2;
      var addSeconds = props.values.start_expirey_sec_2;
      date.setTime(date.getTime() - (addHours * 60 * 60 * 1000)); 
      date.setTime(date.getTime() - (addDays * 24 * 60 * 60 * 1000)); 
      date.setTime(date.getTime() - (addMinutes * 60 * 1000)); 
      date.setTime(date.getTime() - (addSeconds * 1000));
    
    //  let StartCustomDuration = new Date(date);
  
      future  = new Date(date);

      dateFuture = new Date(date);

  }
  
 
  if(props.values.pattern == "weekly"){

    Userdatetime = parseFloat(
          Math.round(parseInt(Date.parse(props.values.day_of_week_timer_fixed) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
    dateFuture = new Date(props.values.day_of_week_timer_fixed);

    updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + (props.values.pattern_weekly * 7), future.getHours(), future.getMinutes()); 

  }else if(props.values.end_trigger_2 == "day_of_week" && props.values.pattern == "custom"){

 //  if (props.values.day_of_week_timer_fixed != null) {

    Userdatetime = parseFloat(
            Math.round(parseInt(Date.parse(props.values.day_of_week_timer_fixed) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
    dateFuture = new Date(props.values.day_of_week_timer_fixed);
        
    if(props.values.start_trigger_2 == 'date_time'){
          future = new Date(props.values.date_time_2);
          updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes());	

        }else if(props.values.start_trigger_2 =='first_day_month'){
          // code add here ....
          var dateDay = new Date();
          var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
          if(!!(props.values.date_time_first_month_3)){
            var start_time_month =  props.values.date_time_first_month_3 != "" ? props.values.date_time_first_month_3.split(':') : "";
            let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
            let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
             future = new Date(firstMonthFinal);
          // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        }else{
           future = new Date(firstDay);
        }

          // future = new Date();
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, 1, future.getHours(), future.getMinutes());	

        
        }else if(props.values.start_trigger_2 =='day_of_week'){ 
          future = new Date(props.values.day_of_week_timer_get_data);
          updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7, future.getHours(), future.getMinutes());
         		
        }else if(props.values.start_trigger_2 =="custom_duration_start" ){			
         updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7);
       }
  
 // }
  }else if(props.values.end_trigger_2 == "last_day_month" && props.values.pattern == "custom"){ 

    var today = new Date();
    var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth()+1, 0);
    if(!!(props.values.end_time_month_2)){
      var end_time_month =  props.values.end_time_month_2 != "" ? props.values.end_time_month_2.split(':') : "";
      let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
      let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(lastMonthFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );

    }else{
      Userdatetime = parseFloat(
          Math.round(parseInt(Date.parse(lastDayOfMonth) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
    }


    dateFuture = new Date(lastDayOfMonth);
        
    if(props.values.start_trigger_2 == 'date_time' ){
          future = new Date(props.values.date_time_2);
          updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes());	
          
        }else if(props.values.start_trigger_2 =='first_day_month'){

          future = new Date();
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, 1, future.getHours(), future.getMinutes());	

        
        }else if(props.values.start_trigger_2 =='day_of_week'){ 
          future = new Date(props.values.day_of_week_timer_get_data);
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, future.getDate(), future.getHours(), future.getMinutes());
         		
        }else if(props.values.start_trigger_2 =="custom_duration_start" ){			
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, future.getDate());
        }

  }else if(props.values.end_trigger_2 == "custom_duration_end"  && props.values.pattern == "custom"){ 

    if(props.values.start_trigger_2 == "date_time"){

        var date = new Date(props.values.date_time_2);
        dateFuture = new Date(date);
        updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes());	

    }else if(props.values.start_trigger_2 == "day_of_week"){

        var date = new Date(props.values.day_of_week_timer_get_data);
        dateFuture = new Date(date);
        future = new Date(props.values.day_of_week_timer_get_data);
        updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7, future.getHours(), future.getMinutes());

    }else if(props.values.start_trigger_2 == "first_day_month"  && props.values.pattern == "custom"){
        var dateDay = new Date();
        var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
        if(!!(props.values.date_time_first_month_3)){
          var start_time_month =  props.values.date_time_first_month_3 != "" ? props.values.date_time_first_month_3.split(':') : "";
          let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
          let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
          var date = new Date(firstMonthFinal);
          dateFuture = new Date(date);
        // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
      }else{

        var date = new Date(firstDay);
        dateFuture = new Date(date);

      }
      var date = new Date(firstDay);
      updateFutureDate = new Date(date.getFullYear(), date.getMonth() + 1, 1, date.getHours(), date.getMinutes());	
    }else if(props.values.start_trigger_2 == "custom_duration_start"){
      var date = new Date(2/3/1970);
    }

    var addDays = props.values.expirey_days_2;
    var addHours = props.values.expirey_hours_2;
    var addMinutes = props.values.expirey_mins_2;
    var addSeconds = props.values.expirey_sec_2;
    date.setTime(date.getTime() + (addHours * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (addDays * 24 * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (addMinutes * 60 * 1000)); 
    date.setTime(date.getTime() + (addSeconds * 1000)); 

    Userdatetime = parseFloat(
      Math.round(parseInt(Date.parse(date) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
    );

    dateFuture = new Date(date);

  }else if(props.values.end_trigger_2 == "date_time"  && props.values.pattern == "custom"){ 

    updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes()); 
 //   console.log(future,"future  ..");
    Userdatetime = parseFloat(
      Math.round(parseInt(Date.parse(props.values.date_time) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
    );

     dateFuture = new Date(props.values.date_time);
    
     // var dateNow = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate());
 
    }else if(props.values.pattern == "yearly"){ 

      updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes()); 
    
      var dateDay = new Date();
      if(props.values.end_day_of_month_year == 'last'){
      var firstDayYear  =  new Date(new Date(dateDay).setMonth(props.values.pattern_end_month_yearly - 1));
      var firstDay = new Date(firstDayYear.getFullYear(), firstDayYear.getMonth() + 1, 0);
      }else{  
        var firstDayMonth  =  new Date(new Date(dateDay).setMonth(props.values.pattern_end_month_yearly - 1));
        var firstDayYear = new Date(firstDayMonth.getFullYear(), firstDayMonth.getMonth(), 1);
        var firstDay  =  new Date(new Date(firstDayYear).setDate(props.values.custom_end_day_month_year));
      }

      let LastDayOfMonth = new Date(firstDay);
    
      if(!!(props.values.end_time_yearly)){
        var end_time_yearly =  props.values.end_time_yearly != "" ? props.values.end_time_yearly.split(':') : "";
        let firstMonthHours =  new Date(new Date(LastDayOfMonth).setHours(LastDayOfMonth.getHours() + end_time_yearly[0]));
        let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + end_time_yearly[1]));
        Userdatetime = parseFloat(
          Math.round(parseInt(Date.parse(firstMonthFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
        dateFuture = new Date(firstMonthFinal);
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{

      let firstMonthHours =  new Date(new Date(LastDayOfMonth).setHours(LastDayOfMonth.getHours() + '23'));
      let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + '59'));

      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(firstMonthFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      dateFuture = new Date(firstMonthFinal);

    }
    
      }else if(props.values.pattern == "monthly"){ 

        updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, future.getDate(), future.getHours(), future.getMinutes()); 
     //   console.log(future,"future  ..");
      
     var dateDay = new Date();
     if(props.values.end_day_of_month == 'last'){
       var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth() + 1, 0);
     }else{
       var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
       var firstDay  =  new Date(new Date(firstDayYear).setDate(props.values.custom_end_day_month));
     }
    
     let firstDayOfMonth = new Date(firstDay);

     if(!!(props.values.end_time_monthly)){
      var end_time_month =  props.values.end_time_monthly != "" ? props.values.end_time_monthly.split(':') : "";
      let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + end_time_month[0]));
      let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + end_time_month[1]));
    //  var date = new Date(firstMonthFinal);
      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(firstMonthFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      dateFuture = new Date(firstMonthFinal);
    //  console.log(date,"date check ...");
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{
   //   var date = new Date(firstDayOfMonth);
      let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + '23'));
      let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + '59'));
      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(firstMonthFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      dateFuture = new Date(firstDayOfMonth);
    }
      
         // var dateNow = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate());
  
        }else if(props.values.pattern == "daily"){ 

          updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate(), future.getHours(), future.getMinutes()); 
       //   console.log(future,"future  ..");
       var today = new Date();
       var EndTimeDaily = new Date(today.getFullYear(), today.getMonth(),today.getDate());
       if(!!(props.values.end_time_daily)){
         var end_time_daily =  props.values.end_time_daily != "" ? props.values.end_time_daily.split(':') : "";
         let EndTimeDailyHour =  new Date(new Date(EndTimeDaily).setHours(EndTimeDaily.getHours() + end_time_daily[0]));
         let EndTimeDailyFinal =  new Date(new Date(EndTimeDailyHour).setMinutes(EndTimeDailyHour.getMinutes() + end_time_daily[1]));
         Userdatetime = parseFloat(
           Math.round(parseInt(Date.parse(EndTimeDailyFinal) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
         );
         dateFuture = new Date(EndTimeDailyFinal);
       }else{
         Userdatetime = parseFloat(
             Math.round(parseInt(Date.parse(EndTimeDaily) + props.values.WPtimeZoneOffset * 3600 * 1000) / 1000)
           );
       }
  
           dateFuture = new Date(EndTimeDaily);
    
          }
    

  Userdefinedatetime = dateFuture;

 
}
else if (props.values.timer_type === "1"){
  var addDays = props.values.expirey_days;
  var addHours = props.values.expirey_hours;
  var addMinutes = props.values.expirey_mins;
  var addSeconds = props.values.expirey_sec;
  TestDateTime.setTime(TestDateTime.getTime() + (addHours * 60 * 60 * 1000)); 
  TestDateTime.setTime(TestDateTime.getTime() + (addDays * 24 * 60 * 60 * 1000)); 
  TestDateTime.setTime(TestDateTime.getTime() + (addMinutes * 60 * 1000)); 
  TestDateTime.setTime(TestDateTime.getTime() + (addSeconds * 1000)); 

  CurrentDateTime = new Date(TestDateTime);

  Userdefinedatetime = CurrentDateTime;
  //  Userdefinedatetime = "0000:00:00 00:00:00";
  }
  console.log(Userdefinedatetime,"user timer");
 return (
<div>
   <FlipCountdown
    hideDay = {props.values.show_days === "on" ? false : true}
    hideHour = {props.values.show_hours === "on" ? false : true}
    hideMinute = {props.values.show_minutes === "on" ? false : true}
    hideSecond = {props.values.show_seconds === "on" ? false : true}
    dayTitle =  {props.values.custom_days_label_text}
    hourTitle = {props.values.custom_hours_label_text}
    minuteTitle = {props.values.custom_minutes_label_text}
    secondTitle = {props.values.custom_seconds_label_text}
    hideDayLeadingZero = {props.values.hide_day_leading_zero}
    hideAllLeadingZero = {props.values.hide_all_leading_zero}
    show_separator_first = {props.values.show_separator_first}
    show_separator_second = {props.values.show_separator_first}
    show_separator_third = {props.values.show_separator_first}
    theme='light'
    size='large'
    titlePosition='bottom'
    endAtZero
    endAt={Userdefinedatetime} // Date/Time
           />

{/* <FlipClockCountdown  
        className='flip-clock'
        labels={['DAYS', 'HOURS', 'MINUTES', 'SECONDS']}
        labelStyle={{ fontSize: 10, fontWeight: 500, textTransform: 'uppercase' }}
        digitBlockStyle={{ width: 40, height: 60, fontSize: 30 }}
        dividerStyle={{ color: 'white', height: 1 }}
        separatorStyle={{ color: 'red', size: '6px' }}
        to={new Date(days_str * 3600 * 1000 + 5000)}
        duration={0.5}
      >
    </FlipClockCountdown> */}
 {/* <ProgressBar 
   completed={30}
   bgColor={props.seconds.bar_background_color}
   borderRadius="0px"
   height={props.seconds.bar_height}
   baseBgColor={props.seconds.bar_remaining_background_color}
   labelColor="#ffffff"
   className="wrapper"
   maxCompleted={100}
   customLabel={event_status_hybrid_html}
   // barContainerClassName="container"
   // completedClassName="barCompleted"
   /> */}
   </div >
 );
}

export default FlipCountdowns;

// import React, { Component } from 'react';
// import FlipClockCountdown from '@leenguyen/react-flip-clock-countdown';
// import '@leenguyen/react-flip-clock-countdown/dist/index.css';
// import "./style.css";

// class FlipCountdowns extends Component {
//   render(props) {
//     return (
//       <FlipClockCountdown  
//         className='flip-clock'
//         labels={['DAYS', 'HOURS', 'MINUTES', 'SECONDS']}
//         labelStyle={{ fontSize: 10, fontWeight: 500, textTransform: 'uppercase' }}
//         digitBlockStyle={{ width: 40, height: 60, fontSize: 30 }}
//         dividerStyle={{ color: 'white', height: 1 }}
//         separatorStyle={{ color: 'red', size: '6px' }}
//         to={new Date().getTime() + 24 * 3600 * 1000 + 5000}
//         duration={0.5}
//       >
//       </FlipClockCountdown>
//     );
//   }
// }

// export default FlipCountdowns;



// function FlipCountdowns(props) {

//   var seconds = "0";
//  var days_str = "0";
  
//   if(props.count != undefined){
 
//     var remainder = props.count.count
//     var days = Math.floor(remainder / 60 / 60 / 24);
//     remainder -= days * 60 * 60 * 24;
//     var hours = Math.floor(remainder / 60 / 60);
//     remainder -= hours * 60 * 60;
//     var minutes = Math.floor(remainder / 60);
//     remainder -= minutes * 60;
//     var seconds = Math.floor(remainder);

//    days_str = days.toString().padStart(3, '0');
//     var hours_str = hours.toString().padStart(2, '0');
//     var minutes_str = minutes.toString().padStart(2, '0');
//     var seconds_str = seconds.toString().padStart(2, '0');

//     console.log(props.count.count,"props.count",days_str,"days_str",hours_str,"hours_str",minutes_str,"minutes_str",seconds_str,"seconds_str");
//     seconds = props.count.count;
//   }

//   const [digit, setDigit] = useState(9)

//   useEffect(() => {
//     setTimeout(() => setDigit(digit === 0 ? 9 : digit-1), 1000)
//   }, [digit])

//   return (
//     <FlipCard digit={String(seconds)} width={60} height={80} />
//   );
// }

// export default FlipCountdowns;