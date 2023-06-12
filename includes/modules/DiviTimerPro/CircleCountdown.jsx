import React from "react";
import { CountdownCircleTimer } from "react-countdown-circle-timer";
//import "./styles.css";

const minuteSeconds = 60;
const hourSeconds = 3600;
const daySeconds = 86400;

const timerProps = {
  isPlaying: true,
  size: 190,
  strokeWidth: 12
};

const renderTime = (dimension, time) => {
  return (
    <div className="time-wrapper">
      <div className="time dtp_circle_time">{time}</div>
      <div className="dtp_circle_label" >{dimension}</div>
    </div>
  );
};

const getTimeSeconds = (time) => (minuteSeconds - time) | 0;
const getTimeMinutes = (time) => ((time % hourSeconds) / minuteSeconds) | 0;
const getTimeHours = (time) => ((time % daySeconds) / hourSeconds) | 0;
const getTimeDays = (time) => (time / daySeconds) | 0;

function CircleCountdown(props) {

  const stratTime = Date.now() / 1000; // use UNIX timestamp in seconds
  var seconds_str = props.count != undefined ? props.count.count: 0;
  const endTime = stratTime + seconds_str; // use UNIX timestamp in seconds

  
  const remainingTime = endTime - stratTime;
  const days = Math.ceil(remainingTime / daySeconds);
  const daysDuration = days * daySeconds;
  var circle_color = props.values.circle_color != undefined ? props.values.circle_color: "#60686F";
 

  var custom_days = props.labels != undefined ? props.labels.custom_days_label_text: "";
  var custom_hours = props.labels != undefined ? props.labels.custom_hours_label_text: "";
  var custom_minutes = props.labels != undefined ? props.labels.custom_minutes_label_text: "";
  var custom_seconds = props.labels != undefined ? props.labels.custom_seconds_label_text: "";

 

  return (
    <div className="et_pb_countdown_timer_circle">
        {props.values.show_days == "on" && <div className="countBoxItem days section values ">
      <CountdownCircleTimer
        {...timerProps}
        colors={circle_color}
        trailColor={props.values.circle_progress_color}
        strokeWidth={props.values.circle_width}
        trailStrokeWidth={props.values.circle_thickness_progress}
      //  rotation="counterclockwise"
        duration={daysDuration}
        initialRemainingTime={remainingTime}
      >
        {({ elapsedTime, color }) => (
          <span style={{ color }}>
            {renderTime(custom_days, getTimeDays(daysDuration - elapsedTime))}
          </span>
        )}
      </CountdownCircleTimer>
        </div>}
        {  props.values.show_hours == "on" && <div className="countBoxItem days section values ">
        <CountdownCircleTimer
        {...timerProps}
        colors={circle_color}
        trailColor={props.values.circle_progress_color}
        strokeWidth={props.values.circle_width}
        trailStrokeWidth={props.values.circle_thickness_progress}
     //   rotation="counterclockwise"
        duration={daySeconds}
        initialRemainingTime={remainingTime % daySeconds}
        onComplete={(totalElapsedTime) => ({
          shouldRepeat: remainingTime - totalElapsedTime > hourSeconds
        })}
      >
        {({ elapsedTime, color }) => (
          <span style={{ color }}>
            {renderTime(custom_hours, getTimeHours(daySeconds - elapsedTime))}
          </span>
        )}
      </CountdownCircleTimer>
      </div>}
      {props.values.show_minutes == "on" && <div className="countBoxItem days section values ">
      <CountdownCircleTimer
        {...timerProps}
        colors={circle_color}
        trailColor={props.values.circle_progress_color}
        strokeWidth={props.values.circle_width}
        trailStrokeWidth={props.values.circle_thickness_progress}
     //   rotation="counterclockwise"
        duration={hourSeconds}
        initialRemainingTime={remainingTime % hourSeconds}
        onComplete={(totalElapsedTime) => ({
          shouldRepeat: remainingTime - totalElapsedTime > minuteSeconds
        })}
      >
        {({ elapsedTime, color }) => (
          <span style={{ color }}>
            {renderTime(custom_minutes, getTimeMinutes(hourSeconds - elapsedTime))}
          </span>
        )}
      </CountdownCircleTimer>
      </div>}
      {  props.values.show_seconds == "on" &&  <div className="countBoxItem days section values ">
      <CountdownCircleTimer
        {...timerProps}
        colors={circle_color}
        strokeWidth={props.values.circle_width}
        trailColor={props.values.circle_progress_color}
        trailStrokeWidth={props.values.circle_thickness_progress}
      //  rotation="counterclockwise"
        duration={minuteSeconds}
        initialRemainingTime={remainingTime % minuteSeconds}
        onComplete={(totalElapsedTime) => ({
          shouldRepeat: remainingTime - totalElapsedTime > 0
        })}
      >
        {({ elapsedTime, color }) => (
          <span style={{ color }}>
            {renderTime(custom_seconds, getTimeSeconds(elapsedTime))}
          </span>
        )}
      </CountdownCircleTimer>
      </div>}
    </div>
  );
}


export default CircleCountdown;