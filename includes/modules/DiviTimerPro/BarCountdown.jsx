
import React from "react";

 //import ProgressBar from "@ramonak/react-progress-bar";
 //import CountdownTimer, { __esModule } from "react-component-countdown-timer";
 import FlipCountdown from '@rumess/react-flip-countdown';

function BarCountdown(props) {


  if(props.count != undefined){
    const sec = parseInt(props.count.count, 10); // convert value to number if it's string
    let hours   = Math.floor(sec / 3600); // get hours
    let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
    let seconds = sec - (hours * 3600) - (minutes * 60); //  get seconds
    // add 0 if value < 10; Example: 2 => 02
    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    
    let EndDate = new Date(hours+':'+minutes+':'+seconds);
      
    let CurrentDateTime = new Date(
      EndDate.getTime() + props.values.WPtimeZoneOffset * 3600 * 1000
    );
    
    let Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );
    
  }

  // var settings_text = {
  //   count: props.seconds,
  // }
 // const timeRemaingText =  '<span className="bar_time_remaining_text">Time Remaining Text: 30%';

 if(props.values.show_time_remaining_label == "on"){
  var time_remaining_label = (
    <span
      className={"et_pb_counter_title bar_time_remaining_label"}
      dangerouslySetInnerHTML={{ __html: "Time Remaining Label"}}
    />
  );
 }else{
  var time_remaining_label = "";
 }


 if(props.values.show_time_remaining_text == "on"){
  var time_remaining_text = (
    <span
      className={"et_pb_counter_amount_number_inner bar_time_remaining_text"}
      dangerouslySetInnerHTML={{ __html: "Time Remaining Text:"}}
    />
  );
 }else{
  var time_remaining_text = "";
 }

  return (
 <div>
<ul className="et_pb_module et_pb_counters et_pb_countdown_timer_bar et-waypoint et_pb_bg_layout_light et-animated"><li className="et_pb_counter et_pb_countdown_bar">
			{/* <span className="et_pb_counter_title bar_time_remaining_label">Time Remaining Label</span> */}
      {time_remaining_label}
			<span className="et_pb_counter_container barCountdowncontainer">
				<span className="et_pb_counter_amount barCountdownCompleted" style={{"width" : "0%"}} data-width={"0%"}><span className="et_pb_counter_amount_number">{time_remaining_text} 0%</span></span>
				<span className="et_pb_counter_amount overlay" style={{"width" : "0%"}} data-width={"0%"}><span className="et_pb_counter_amount_number">{time_remaining_text} 0%</span></span>
			</span>
		</li>
		</ul>
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

export default BarCountdown;