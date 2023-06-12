// External Dependencies
import React, { Component, Fragment } from "react";
import CountdownTimer, { __esModule } from "react-component-countdown-timer";
import $ from 'jquery';
import Parser from "html-react-parser";
import BarCountdown from "./BarCountdown";
import FlipCountdowns from "./FlipCountdowns";
import CircleCountdown from "./CircleCountdown";
import FlipCountdown from '@rumess/react-flip-countdown';
import CountdownCircle from "./CircleCountdowntwo";
import moment from 'moment';

// Internal Dependencies
import "./style.css";

class ditpCountdownTimer extends Component {
  static slug = "ditp_countdown_timer";

  constructor() {
    super();
    // alert("constructor");
    this.state = {
      seconds: 0,
      parentClass: "",
      checkPauseInterval: 0,
      // show_color:"",
    };
    this.timerEnd = this.timerEnd.bind(this);

  }
  static css(props) {

    const additionalCss = [];

    if (props.container_margin) {
      const container_margin = props.container_margin.split("|");
      const container_margin_last_edited = props.container_margin_last_edited;
      const container_margin_responsive_active = container_margin_last_edited && container_margin_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% .ditp_countdown_counter_container',
        declaration: `margin-top: ${container_margin[0]} !important; margin-right: ${container_margin[1]} !important; margin-bottom: ${container_margin[2]} !important; margin-left: ${container_margin[3]} !important;`,
      }]);


      if (props.container_margin_tablet && container_margin_responsive_active && props.container_margin_tablet && '' !== props.container_margin_tablet) {
        const container_margin_tablet = props.container_margin_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .ditp_countdown_counter_container',
          declaration: `margin-top: ${container_margin_tablet[0]} !important; margin-right: ${container_margin_tablet[1]} !important; margin-bottom: ${container_margin_tablet[2]} !important; margin-left: ${container_margin_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.container_margin_phone && container_margin_responsive_active && props.container_margin_phone && '' !== props.container_margin_phone) {
        const container_margin_phone = props.container_margin_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .ditp_countdown_counter_container',
          declaration: `margin-top: ${container_margin_phone[0]} !important; margin-right: ${container_margin_phone[1]} !important; margin-bottom: ${container_margin_phone[2]} !important; margin-left: ${container_margin_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }

    if (props.container_padding) {
      const container_padding = props.container_padding.split("|");
      const container_padding_last_edited = props.container_padding_last_edited;
      const container_padding_responsive_active = container_padding_last_edited && container_padding_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% .ditp_countdown_counter_container',
        declaration: `padding-top: ${container_padding[0]} !important; padding-right: ${container_padding[1]} !important; padding-bottom: ${container_padding[2]} !important; padding-left: ${container_padding[3]} !important;`,
      }]);


      if (props.container_padding_tablet && container_padding_responsive_active && props.container_padding_tablet && '' !== props.container_padding_tablet) {
        const container_padding_tablet = props.container_padding_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .ditp_countdown_counter_container',
          declaration: `padding-top: ${container_padding_tablet[0]} !important; padding-right: ${container_padding_tablet[1]} !important; padding-bottom: ${container_padding_tablet[2]} !important; padding-left: ${container_padding_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.container_padding_phone && container_padding_responsive_active && props.container_padding_phone && '' !== props.container_padding_phone) {
        const container_padding_phone = props.container_padding_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .ditp_countdown_counter_container',
          declaration: `padding-top: ${container_padding_phone[0]} !important; padding-right: ${container_padding_phone[1]} !important; padding-bottom: ${container_padding_phone[2]} !important; padding-left: ${container_padding_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }

    if (props.number_margin) {
      const number_margin = props.number_margin.split("|");
      const number_margin_last_edited = props.number_margin_last_edited;
      const number_margin_responsive_active = number_margin_last_edited && number_margin_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% p.value',
        declaration: `margin-top: ${number_margin[0]} !important; margin-right: ${number_margin[1]} !important; margin-bottom: ${number_margin[2]} !important; margin-left: ${number_margin[3]} !important;`,
      }]);


      if (props.number_margin_tablet && number_margin_responsive_active && props.number_margin_tablet && '' !== props.number_margin_tablet) {
        const number_margin_tablet = props.number_margin_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.value',
          declaration: `margin-top: ${number_margin_tablet[0]} !important; margin-right: ${number_margin_tablet[1]} !important; margin-bottom: ${number_margin_tablet[2]} !important; margin-left: ${number_margin_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.number_margin_phone && number_margin_responsive_active && props.number_margin_phone && '' !== props.number_margin_phone) {
        const number_margin_phone = props.number_margin_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.value',
          declaration: `margin-top: ${number_margin_phone[0]} !important; margin-right: ${number_margin_phone[1]} !important; margin-bottom: ${number_margin_phone[2]} !important; margin-left: ${number_margin_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }

    if (props.number_padding) {
      const number_padding = props.number_padding.split("|");
      const number_padding_last_edited = props.number_padding_last_edited;
      const number_padding_responsive_active = number_padding_last_edited && number_padding_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% p.value',
        declaration: `padding-top: ${number_padding[0]} !important; padding-right: ${number_padding[1]} !important; padding-bottom: ${number_padding[2]} !important; padding-left: ${number_padding[3]} !important;`,
      }]);


      if (props.number_padding_tablet && number_padding_responsive_active && props.number_padding_tablet && '' !== props.number_padding_tablet) {
        const number_padding_tablet = props.number_padding_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.value',
          declaration: `padding-top: ${number_padding_tablet[0]} !important; padding-right: ${number_padding_tablet[1]} !important; padding-bottom: ${number_padding_tablet[2]} !important; padding-left: ${number_padding_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.number_padding_phone && number_padding_responsive_active && props.number_padding_phone && '' !== props.number_padding_phone) {
        const number_padding_phone = props.number_padding_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.value',
          declaration: `padding-top: ${number_padding_phone[0]} !important; padding-right: ${number_padding_phone[1]} !important; padding-bottom: ${number_padding_phone[2]} !important; padding-left: ${number_padding_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }

    if (props.label_margin) {
      const label_margin = props.label_margin.split("|");
      const label_margin_last_edited = props.label_margin_last_edited;
      const label_margin_responsive_active = label_margin_last_edited && label_margin_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% p.label',
        declaration: `margin-top: ${label_margin[0]} !important; margin-right: ${label_margin[1]} !important; margin-bottom: ${label_margin[2]} !important; margin-left: ${label_margin[3]} !important;`,
      }]);


      if (props.label_margin_tablet && label_margin_responsive_active && props.label_margin_tablet && '' !== props.label_margin_tablet) {
        const label_margin_tablet = props.label_margin_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.label',
          declaration: `margin-top: ${label_margin_tablet[0]} !important; margin-right: ${label_margin_tablet[1]} !important; margin-bottom: ${label_margin_tablet[2]} !important; margin-left: ${label_margin_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.label_margin_phone && label_margin_responsive_active && props.label_margin_phone && '' !== props.label_margin_phone) {
        const label_margin_phone = props.label_margin_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.label',
          declaration: `margin-top: ${label_margin_phone[0]} !important; margin-right: ${label_margin_phone[1]} !important; margin-bottom: ${label_margin_phone[2]} !important; margin-left: ${label_margin_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }
    if (props.label_padding) {
      const label_padding = props.label_padding.split("|");
      const label_padding_last_edited = props.label_padding_last_edited;
      const label_padding_responsive_active = label_padding_last_edited && label_padding_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% p.label',
        declaration: `padding-top: ${label_padding[0]} !important; padding-right: ${label_padding[1]} !important; padding-bottom: ${label_padding[2]} !important; padding-left: ${label_padding[3]} !important;`,
      }]);


      if (props.label_padding_tablet && label_padding_responsive_active && props.label_padding_tablet && '' !== props.label_padding_tablet) {
        const label_padding_tablet = props.label_padding_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.label',
          declaration: `padding-top: ${label_padding_tablet[0]} !important; padding-right: ${label_padding_tablet[1]} !important; padding-bottom: ${label_padding_tablet[2]} !important; padding-left: ${label_padding_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.number_padding_phone && label_padding_responsive_active && props.label_padding_phone && '' !== props.label_padding_phone) {
        const label_padding_phone = props.label_padding_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% p.label',
          declaration: `padding-top: ${label_padding_phone[0]} !important; padding-right: ${label_padding_phone[1]} !important; padding-bottom: ${label_padding_phone[2]} !important; padding-left: ${label_padding_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }

    if (props.section_margin) {
      const section_margin = props.section_margin.split("|");
      const section_margin_last_edited = props.section_marginn_last_edited;
      const section_margin_responsive_active = section_margin_last_edited && section_margin_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% .values',
        declaration: `margin-top: ${section_margin[0]} !important; margin-right: ${section_margin[1]} !important; margin-bottom: ${section_margin[2]} !important; margin-left: ${section_margin[3]} !important;`,
      }]);


     
      if (props.section_margin_tablet && props.section_margin_tablet && '' !== props.section_margin_tablet) {
        const section_margin_tablet = props.section_margin_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .values',
          declaration: `margin-top: ${section_margin_tablet[0]} !important; margin-right: ${section_margin_tablet[1]} !important; margin-bottom: ${section_margin_tablet[2]} !important; margin-left: ${section_margin_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.section_margin_phone && props.section_margin_phone && '' !== props.section_margin_phone) {
        const section_margin_phone = props.section_margin_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .values',
          declaration: `margin-top: ${section_margin_phone[0]} !important; margin-right: ${section_margin_phone[1]} !important; margin-bottom: ${section_margin_phone[2]} !important; margin-left: ${section_margin_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }
    if (props.section_padding) {
      const section_padding = props.section_padding.split("|");
      const section_padding_last_edited = props.section_padding_last_edited;
      const section_padding_responsive_active = section_padding_last_edited && section_padding_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% .values',
        declaration: `padding-top: ${section_padding[0]} !important; padding-right: ${section_padding[1]} !important; padding-bottom: ${section_padding[2]} !important; padding-left: ${section_padding[3]} !important;`,
      }]);


      if (props.section_padding_tablet && section_padding_responsive_active && props.section_padding_tablet && '' !== props.section_padding_tablet) {
        const section_padding_tablet = props.section_padding_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .values',
          declaration: `padding-top: ${section_padding_tablet[0]} !important; padding-right: ${section_padding_tablet[1]} !important; padding-bottom: ${section_padding_tablet[2]} !important; padding-left: ${section_padding_tablet[3]} !important;`,
          device: 'tablet',
        }]);
      }

      if (props.section_padding_phone && section_padding_responsive_active && props.section_padding_phone && '' !== props.section_padding_phone) {
        const section_padding_phone = props.section_padding_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .values',
          declaration: `padding-top: ${section_padding_phone[0]} !important; padding-right: ${section_padding_phone[1]} !important; padding-bottom: ${section_padding_phone[2]} !important; padding-left: ${section_padding_phone[3]} !important;`,
          device: 'phone',
        }]);
      }
    }


    if (props.section_width) {
      const section_width = props.section_width.split("|");
      const section_width_last_edited = props.section_width_last_edited;
      const section_width_responsive_active = section_width_last_edited && section_width_last_edited.startsWith("on");

      additionalCss.push([{
        selector: '%%order_class%% .et_pb_countdown_timer .section.values',
        declaration: "width: " + props.section_width + " !important;",
      }]);


      if (props.section_width_tablet && section_width_responsive_active && props.section_width_tablet && '' !== props.section_width_tablet) {
        const section_width_tablet = props.section_width_tablet.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .et_pb_countdown_timer .section.values',
          declaration: "width: " + props.section_width_tablet + " !important;",
          device: 'tablet',
        }]);
      }

      if (props.section_width_phone && section_width_responsive_active && props.section_width_phone && '' !== props.section_width_phone) {
        const section_width_phone = props.section_width_phone.split("|");
        additionalCss.push([{
          selector: '%%order_class%% .et_pb_countdown_timer .section.values',
          declaration: "width: " + props.section_width_phone + " !important;",
          device: 'phone',
        }]);
      }
    }
    additionalCss.push([{
      selector: '%%order_class%% span.section, %%order_class%% .split-flip',
      declaration: "color: " + props.separator_text_color + " !important;",
    }]);

    additionalCss.push([{
      selector: '%%order_class%% p.value, %%order_class%% .card__top, %%order_class%% .card__bottom, %%order_class%% .card__next, %%order_class%% .card__back::before',
      declaration: "background-color: " + props.number_background_color + " !important;",
    }]);

    additionalCss.push([{
      selector: '%%order_class%% .barCountdownCompleted',
      declaration: "background: " + props.bar_background_color + ";",
    }]);


    additionalCss.push([{
      selector: '%%order_class%% .barCountdowncontainer',
      declaration: "background: " + props.bar_remaining_background_color + ";",
    }]);

    
    additionalCss.push([{
      selector: '%%order_class%% .barCountdowncontainer,  %%order_class%% .barCountdowncontainer',
      declaration: "height: " + props.bar_height + ";",
    }]);

    additionalCss.push([{
      selector: '%%order_class%% p.label',
      declaration: "background-color: " + props.label_background_color + ";",
    }]);

    additionalCss.push([{
      selector: '%%order_class%% .section.values, %%order_class%% .dp_countdown_text_timer .count',
      declaration: "background-color: " + props.section_background_color + ";",
    }]);

    additionalCss.push([{
      selector: '%%order_class%% .ditp_countdown_counter_container',
      declaration: "background-color: " + props.container_background_color + ";",
    }]);

    return additionalCss;
  }
  timer_message_button(show_more_info_button = this.props.show_more_info_button, timer_message_url_new_window = this.props.timer_message_url_new_window, timer_message_button_url = this.props.timer_message_button_url, ajax_icon_hover, phone_icon, tablet_icon, desktop_icon, buttonClasses, timer_message_button_icons_list = JSON.parse(this.props.timer_message_button_icons_list), custom_message_button = this.props.custom_message_button, message_button_icon = this.props.message_button_icon, message_button_icon_phone = this.props.message_button_icon_phone, message_button_icon_tablet = this.props.message_button_icon_tablet, timer_message_button_text = this.props.timer_message_button_text) {
    let message_button_icon_placement = this.props.message_button_on_hover === "off" && this.props.message_button_icon_placement === 'left' ? " et_pb_button_no_hover " : "";
    let message_button_icon_placement_on_hover = this.props.message_button_on_hover === "on" && this.props.message_button_icon_placement === 'left' ? " et_pb_icon_align_hover_left " : "";
    let message_button_icon_placement_right_hover = this.props.message_button_on_hover === "off" && this.props.message_button_icon_placement === 'right' ? " et_pb_message_icon_hover " : "";
    //if (pagination_type === "load_more" && show_pagination==="on" ) {
    //let icon_align=this.props.message_button_icon_placement === "left" ?"et_pb_ajax_align":""
    // ajax_icon_hover=this.props.message_button_on_hover=="off" ? "et_pb_button_load_no_hover"
    // : "";
    if (show_more_info_button === "on") {
      timer_message_url_new_window = timer_message_url_new_window === "on" ? "blank" : "";
      buttonClasses =
        custom_message_button === "on"
          ? " et_pb_custom_button_icon " + message_button_icon_placement + message_button_icon_placement_on_hover +
          message_button_icon_placement_right_hover
          : "";
      desktop_icon =
        message_button_icon !== "" && message_button_icon
          ? timer_message_button_icons_list[
          parseInt(message_button_icon.replace(/%/gi, ""))
          ]
          : "";
      tablet_icon =
        message_button_icon_phone !== "" &&
          message_button_icon_phone
          ? timer_message_button_icons_list[
          parseInt(message_button_icon_phone.replace(/%/gi, "b"))
          ]
          : "";
      phone_icon =
        message_button_icon_tablet !== "" &&
          message_button_icon_tablet
          ? timer_message_button_icons_list[
          parseInt(message_button_icon_tablet.replace(/%/gi, "b"))
          ]
          : "";
      return (
        <p
          className={
            "dtp_message_button et_pb_button_wrapper "
            //(this.props.show_excerpt === "on" ? "mb-2" : " mt-3 mb-2")
          }
        >
          <a
            href={timer_message_button_url}
            rel="bookmark"
            target={timer_message_url_new_window}
            data-icon={Parser(desktop_icon)}
            data-icon-tablet={Parser(tablet_icon)}
            data-icon-phone={Parser(phone_icon)}
            className={" dtp_custom_message_button et_pb_button " + buttonClasses}
          >
            {timer_message_button_text}
          </a>
        </p>
      );
    }
  }
  restartOptions(UpdateCurrentDateTime, Userdatetime, totalMinutes, start_index = 1, end_index = this.props.auto_restart_recurrences_number, recurence_type = this.props.autorestart_recurrence, AutoRestartInterval = this.props.auto_restart_interval, checkPauseIntervalEnabled,futurePauseMinutes) {
      
    // for getting exact restart counter take Difference between two (The Start Time + Duration) - Current Date Time
    // which will eventually gives you the number of days , minutes , hours add in the UserDateTime and get the Time Stamp
    // after that add Restart Duration in it  than take difference between current date time
    let TestDateTime = new Date();
    let CurrentDateTime = new Date(
      TestDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
    let CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );
    let PauseDays = 0;
    let PauseHours = 0;
    let PauseMins = 0;
    let totalPauseMinutes = 0;

  //   PauseDays =
  //   (days > 0 &&
  //     parseInt(days) * 24 * 60) ||
  //   0;
  // PauseHours =
  //   (hours > 0 &&
  //     parseInt(hours) * 60) ||
  //   0;
  // PauseMins = parseInt(minutes);

  totalPauseMinutes = parseInt(futurePauseMinutes); //parseInt(PauseDays) + parseInt(PauseHours) + parseInt(PauseMins);
  
  //console.log(Userdatetime,"Userdatetime check");


    if ((checkPauseIntervalEnabled === 1 || AutoRestartInterval === 'off') && Userdatetime <= CurrentDateTimeSTR) {
      UpdateCurrentDateTime.setTime(
        Userdatetime * 1000 + parseInt(totalMinutes) * 60 * 1000
      );
      Userdatetime = parseFloat(
        Math.round(parseInt(UpdateCurrentDateTime.getTime()) / 1000)
      );
      checkPauseIntervalEnabled = 0;

   //   console.log(UpdateCurrentDateTime,"UpdateCurrentDateTime off",totalPauseMinutes);
    }
    if ((checkPauseIntervalEnabled === 0 || checkPauseIntervalEnabled === undefined) && Userdatetime <= CurrentDateTimeSTR) {

      // days
      // hours
      // minutes
    
      UpdateCurrentDateTime.setTime(
        Userdatetime * 1000 + parseInt(totalPauseMinutes) * 60 * 1000
      );
      Userdatetime = parseFloat(
        Math.round(parseInt(UpdateCurrentDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      checkPauseIntervalEnabled = 1;
   //   console.log(UpdateCurrentDateTime,"UpdateCurrentDateTime on",totalPauseMinutes);
    }

    // let intervaldays =
    //   (this.props.expirey_days > 0 &&
    //     parseInt(this.props.expirey_days) * 24 * 60) ||
    //   0;
    // let intervalHours =
    //   (this.props.expirey_hours > 0 &&
    //     parseInt(this.props.expirey_hours) * 60) ||
    //   0;
    // let intervalMins = parseInt(this.props.expirey_mins);
    // let intervaltotalMinutes = parseInt(intervaldays) + parseInt(intervalHours) + parseInt(intervalMins);


    if (Userdatetime <= CurrentDateTimeSTR && start_index <= end_index && recurence_type === "2") {
      if (AutoRestartInterval === "on" && parseFloat(start_index) % 2 !== 0) {

        Userdatetime = this.restartOptions(
          UpdateCurrentDateTime,
          Userdatetime,
          totalMinutes,
          ++start_index,
          end_index,
          recurence_type,
          AutoRestartInterval,
          checkPauseIntervalEnabled,
          futurePauseMinutes,
        );
        //   start_index++;
        // }
      }
      else {

        Userdatetime = this.restartOptions(
          UpdateCurrentDateTime,
          Userdatetime,
          totalMinutes,
          ++start_index,
          end_index,
          recurence_type,
          AutoRestartInterval,
          checkPauseIntervalEnabled,
          futurePauseMinutes
        );
        //   start_index++;
        // }
      }
    }

    if (Userdatetime <= CurrentDateTimeSTR && recurence_type !== "2") {
      if (AutoRestartInterval === "on" && totalPauseMinutes !== '' && parseFloat(start_index) % 2 !== 0) {

        Userdatetime = this.restartOptions(
          UpdateCurrentDateTime,
          Userdatetime,
          totalMinutes,
          ++start_index,
          end_index,
          recurence_type,
          AutoRestartInterval,
          checkPauseIntervalEnabled,
          futurePauseMinutes
        );
      }
      else {

        Userdatetime = this.restartOptions(
          UpdateCurrentDateTime,
          Userdatetime,
          totalMinutes,
          ++start_index,
          end_index,
          recurence_type,
          AutoRestartInterval,
          checkPauseIntervalEnabled,
          futurePauseMinutes
        );
      }

    }

    if (Userdatetime >= CurrentDateTimeSTR) {
      return {
        'UserDateTime': Userdatetime,
        'checkPauseIntervalEnabled': checkPauseIntervalEnabled
      };
    }
    else {

      return {
        'UserDateTime': Userdatetime.UserDateTime,
        'checkPauseIntervalEnabled': Userdatetime.checkPauseIntervalEnabled
      };
    }

  }
 
  
  // addHoursToDate(date, hours) {
  //   return new Date(new Date(date).setHours(date.getHours() + hours));
  // }

  getTotalTimeLeft(timeChange = false, seconds) {
    let TestDateTime = new Date();

    let CurrentDateTime;
   // console.log('future new test date');
    CurrentDateTime = new Date(
      TestDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );

    let UpdateCurrentDateTime = new Date(
      TestDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
    let CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

    let Userdefinedatetime = parseFloat(
      Math.round(parseInt(Date.parse(this.props.date_time)) / 1000)
    );
    if (this.props.timer_type === "3") {

      CurrentDateTime = new Date(
        TestDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
      );

      CurrentDateTimeSTR = parseFloat(
        Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
      );

  

   if(this.props.end_trigger_3 == "next_upcoming_event_end_date"){ 
        Userdefinedatetime = parseFloat(
         Math.round(parseInt(Date.parse(this.props.next_upcoming_event_get_date)) / 1000)
       );
  
    //   console.log(Userdefinedatetime,"Userdefinedatetime joshiiiii");
     }else if(this.props.end_trigger_3 == "woo_product_end_date"){


        if (this.props.woo_pro_end_date_get_data != null) {
   
             Userdefinedatetime = parseFloat(
                 Math.round(parseInt(Date.parse(this.props.woo_pro_end_date_get_data)) / 1000)
             );
           
       }
       }else if(this.props.end_trigger_3 == "day_of_week"){


     if (this.props.day_of_week_timer_fixed != null) {

          Userdefinedatetime = parseFloat(
              Math.round(parseInt(Date.parse(this.props.day_of_week_timer_fixed)) / 1000)
          );
        
    }
    }else if(this.props.end_trigger_3 == "last_day_month"){ 

      var today = new Date();
      var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth()+1, 0);
      if(!!(this.props.end_time_month_3)){
        var end_time_month =  this.props.end_time_month_3 != "" ? this.props.end_time_month_3.split(':') : "";
        let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
        let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
        Userdefinedatetime = parseFloat(
          Math.round(parseInt(Date.parse(lastMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );

      }else{
          Userdefinedatetime = parseFloat(
            Math.round(parseInt(Date.parse(lastDayOfMonth) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
          );
      }
     
    }else if(this.props.end_trigger_3 == "custom_duration_end" ){ 

      if(this.props.start_trigger_3 == "date_time"){

          var date = new Date(this.props.start_date_time_3);

      }else if(this.props.start_trigger_3 == "day_of_week"){

          var date = new Date(this.props.day_of_week_timer_get_data);

      }else if(this.props.start_trigger_3 == "first_day_month"){
          var dateDay = new Date();
          var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
          if(!!(this.props.date_time_first_month_3)){
            var start_time_month =  this.props.date_time_first_month_3 != "" ? this.props.date_time_first_month_3.split(':') : "";
            let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
            let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
            var date = new Date(firstMonthFinal);
          // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        }else{

          var date = new Date(firstDay);

        }
        var date = new Date(firstDay);
      }else if(this.props.start_trigger_3 == "immediately"){

        var date = new Date(2/3/1970);

      }else if(this.props.start_trigger_3 == "custom_duration_start"){
        var date = new Date(2/3/1970);
      }

      var addDays = this.props.expirey_days_3;
      var addHours = this.props.expirey_hours_3;
      var addMinutes = this.props.expirey_mins_3;
      var addSeconds = this.props.expirey_sec_3;
      date.setTime(date.getTime() + (addHours * 60 * 60 * 1000)); 
      date.setTime(date.getTime() + (addDays * 24 * 60 * 60 * 1000)); 
      date.setTime(date.getTime() + (addMinutes * 60 * 1000)); 
      date.setTime(date.getTime() + (addSeconds * 1000)); 

      Userdefinedatetime = parseFloat(
        Math.round(parseInt(Date.parse(date)) / 1000)
      );

   //  console.log(Userdefinedatetime,"date check nnn correct",date,"date");
    }else if(this.props.end_trigger_3 == "date_time"){ 
       Userdefinedatetime = parseFloat(
        Math.round(parseInt(Date.parse(this.props.user_defined_end_time)) / 1000)
      );
    }else{

    }
  //   if(this.props.start_trigger_3 == "date_time"){ 
  //   var  Userdefinedatetime_start = parseFloat(
  //      Math.round(parseInt(Date.parse(this.props.start_date_time_3)) / 1000)
  //    );
  //    seconds = (Userdefinedatetime) - (CurrentDateTimeSTR + TestDateTime.getTimezoneOffset() * 60);
  //  }else{
    seconds = (Userdefinedatetime) - (CurrentDateTimeSTR + TestDateTime.getTimezoneOffset() * 60);
  // }

      
      return {
        'seconds': seconds,
        'checkPauseIntervalEnabled': checkPauseInterval
      };
    }


    let checkPauseInterval = 0;
    let days = 0;
    let Hours = 0;
    let Mins = 0;
    let Second = 0;
    let totalMinutes = 0;

   // if(this.props.timer_type === "1"){
      days =
      (this.props.expirey_days > 0 &&
        parseInt(this.props.expirey_days) * 24 * 60) ||
      0;
    Hours =
      (this.props.expirey_hours > 0 &&
        parseInt(this.props.expirey_hours) * 60) ||
      0;
    Mins = parseInt(this.props.expirey_mins);

    Second =
    (this.props.expirey_sec > 0 && this.props.expirey_sec/60 ) || 0;

   // + parseFloat(Second)
    
    totalMinutes = parseInt(days) + parseInt(Hours) + parseInt(Mins) + parseFloat(Second);
    
  //  console.log("totalminutes evergreen",totalMinutes);

  //  }
   
    // if (totalMinutes > 0) {
    //   if (
    //     this.props.timer_type === "2" &&
    //     parseFloat(Userdefinedatetime) + 18000 <= CurrentDateTimeSTR
    //   ) {
    //     totalMinutes = parseInt(totalMinutes) + 300;
    //     UpdateCurrentDateTime.setTime(
    //       Date.parse(this.props.date_time) + parseInt(totalMinutes) * 60 * 1000
    //     );
    //   }
    // }


    let Userdatetime = parseFloat(
      Math.round(parseInt(UpdateCurrentDateTime.getTime()) / 1000)
    );

    if (
      // totalMinutes <= 0 ||
      totalMinutes === null ||
      totalMinutes === undefined
    ) {
      localStorage.setItem(this.state.parentClass, 0);
    }

    if (this.props.timer_type === "1" || this.props.timer_type === "") {
      Userdefinedatetime = CurrentDateTimeSTR;
      if (
        localStorage.getItem(this.state.parentClass) !== null &&
        !isNaN(localStorage.getItem(this.state.parentClass)) &&
        !timeChange
      ) {
        Userdatetime = localStorage.getItem(this.state.parentClass);
      }
      if (
        localStorage.getItem(this.state.parentClass) === null ||
        isNaN(localStorage.getItem(this.state.parentClass)) ||
        timeChange
      ) {
        Userdatetime =
          parseFloat(CurrentDateTimeSTR) + parseFloat(totalMinutes) * 60;
      }

      localStorage.setItem(this.state.parentClass, Userdatetime);
      document.cookie =
        this.state.parentClass +
        "=" +
        localStorage.getItem(this.state.parentClass);
    }

    // let hours = 0;
    // let seconds = 0;
    // let minutes = 0;
    let PauseSeconds = 0;
    let PauseMinutes = 0;
    let PauseHours = 0;
    let PauseDays =  0;
    let futurePauseMinutes = 0;
    let dateFuture = 0;


    if(this.props.timer_type === "2"){

    CurrentDateTime = new Date(
      TestDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );

    CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

      let future = 0;
      let updateFutureDate = 0;

    //  console.log(future,"future new console 00");
//      if(this.props.pattern == "daily"){

//       var dateDay = new Date();
//       var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), dateDay.getDate());
//       if(!!(this.props.start_time_daily)){
//         var start_time_daily =  this.props.start_time_daily != "" ? this.props.start_time_daily.split(':') : "";
//         let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_daily[0]));
//         let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_daily[1]));
//          future = new Date(firstMonthFinal);
//       // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
//       console.log(future,"user date ...  future",dateDay,"dateDay",firstMonthFinal,"firstMonthFinal",start_time_daily,"start_time_daily");
//     }else{
//        future = new Date(dateDay);
//     }

//  //   console.log(future,"future new console");

//      }else 
   
if(this.props.pattern == "weekly"){

future = new Date(this.props.day_of_week_timer_get_data);

}else if(this.props.pattern == "daily"){

var date = new Date();
var Adddate = date.setDate(date.getDate() + 1)
  var AddDay = new Date(Adddate);
  var firstDaily = new Date(AddDay.getFullYear(), AddDay.getMonth(), AddDay.getDate());
  if(!!(this.props.start_time_daily)){
    var start_time_daily =  this.props.start_time_daily != "" ? this.props.start_time_daily.split(':') : "";
    let firstDailyHours =  new Date(new Date(firstDaily).setHours(firstDaily.getHours() + start_time_daily[0]));
    let firstDailyFinal =  new Date(new Date(firstDailyHours).setMinutes(firstDailyHours.getMinutes() + start_time_daily[1]));
     future = new Date(firstDailyFinal);
  // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
}else{
   future = new Date(firstDaily);
}

}else if(this.props.pattern == "yearly"){

  var dateDay = new Date();
  if(this.props.start_day_of_yearly == 'first'){
  var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
  var firstDay  =  new Date(new Date(firstDayYear).setMonth(this.props.pattern_start_month_yearly - 1));
  }else{
    var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
    var firstDayMonth =  new Date(new Date(firstDayYear).setMonth(this.props.pattern_start_month_yearly - 1));
    var firstDay  =  new Date(new Date(firstDayMonth).setDate(this.props.custom_start_day_yearly));
  }
 
  let firstDayOfMonth = new Date(firstDay);

  if(!!(this.props.start_time_yearly)){
   var start_time_month =  this.props.start_time_yearly != "" ? this.props.start_time_yearly.split(':') : "";
   let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
   let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
   future = new Date(firstMonthFinal);
 //  console.log(date,"date check ...");
   // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
 }else{
   future = new Date(firstDayOfMonth);
 }


}else if(this.props.pattern == "monthly"){

  var dateDay = new Date();
  if(this.props.start_day_of_month == 'first'){
    var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
  }else{
    var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
    var firstDay  =  new Date(new Date(firstDayYear).setDate(this.props.custom_start_day_month));
  }
 
  let firstDayOfMonth = new Date(firstDay);

  if(!!(this.props.start_time_monthly)){
   var start_time_month =  this.props.start_time_monthly != "" ? this.props.start_time_monthly.split(':') : "";
   let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
   let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
    future = new Date(firstMonthFinal);
 //  console.log(date,"date check ...");
   // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
 }else{
    future = new Date(firstDayOfMonth);
 }

 // future = new Date(date);

}else  if(this.props.start_trigger_2 == "date_time"){

      future = new Date(this.props.date_time_2);
    
    }else if(this.props.start_trigger_2 == "day_of_week"){

       future = new Date(this.props.day_of_week_timer_get_data);
     //  updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7, future.getHours(), future.getMinutes());
    }else if(this.props.start_trigger_2 == "first_day_month"){

      var dateDay = new Date();
      var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
      if(!!(this.props.date_time_first_month_2)){
        var start_time_month =  this.props.date_time_first_month_2 != "" ? this.props.date_time_first_month_2.split(':') : "";
        let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
        let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
         future = new Date(firstMonthFinal);
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{
       future = new Date(firstDay);
    }
    }else if(this.props.start_trigger_2 == "custom_duration_start"){

      if(this.props.end_trigger_2 == "date_time"){  
        var date = new Date(this.props.date_time);
     }else if(this.props.end_trigger_2 == "last_day_month"){
    
      let lastMonthDate = 0;
      var today = new Date();
      var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);
      if(!!(this.props.end_time_month_2)){
        var end_time_month =  this.props.end_time_month_2 != "" ? this.props.end_time_month_2.split(':') : "";
        let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
        let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
        lastMonthDate = lastMonthFinal;
        // var date = new Date();
        // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
      }else{
        lastMonthDate = lastDayOfMonth;
      }
        var date = new Date(lastMonthDate);
     }else if(this.props.end_trigger_2 == "day_of_week"){
    
     // if (this.props.day_of_week_timer_fixed != null) {
         var date = new Date(this.props.day_of_week_timer_fixed);
    // }
    
     }else{
      var date = new Date();
     }
    
      var addDays = this.props.start_expirey_days_2;
      var addHours = this.props.start_expirey_hours_2;
      var addMinutes = this.props.start_expirey_mins_2;
      var addSeconds = this.props.start_expirey_sec_2;
      date.setTime(date.getTime() - (addHours * 60 * 60 * 1000)); 
      date.setTime(date.getTime() - (addDays * 24 * 60 * 60 * 1000)); 
      date.setTime(date.getTime() - (addMinutes * 60 * 1000)); 
      date.setTime(date.getTime() - (addSeconds * 1000));
    
    //  let StartCustomDuration = new Date(date);
  
      future  = new Date(date);

      dateFuture = new Date(date);
    
      // CurrentDateTime = new Date(
      //   StartCustomDuration.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
      // );
  
      // Userdatetime = parseFloat(
      //   Math.round(parseInt(Date.parse(date) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      // );
    
      // Userdatetime = parseFloat(
      //   Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
      // );
    //  console.log("end date check",date);
  }
  
  // else if(this.props.start_trigger_2 == "woo_product_start_date" ){
  //       future = new Date(this.props.woo_pro_start_date_get_data);
  // }

  if(this.props.pattern == "weekly"){

    Userdatetime = parseFloat(
          Math.round(parseInt(Date.parse(this.props.day_of_week_timer_fixed) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
    dateFuture = new Date(this.props.day_of_week_timer_fixed);

    updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + (this.props.pattern_weekly * 7), future.getHours(), future.getMinutes()); 

  }else if(this.props.end_trigger_2 == "day_of_week" && this.props.pattern == "custom"){

 //  if (this.props.day_of_week_timer_fixed != null) {

    Userdatetime = parseFloat(
            Math.round(parseInt(Date.parse(this.props.day_of_week_timer_fixed) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
    dateFuture = new Date(this.props.day_of_week_timer_fixed);
        
    if(this.props.start_trigger_2 == 'date_time'){
          future = new Date(this.props.date_time_2);
          updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes());	

        }else if(this.props.start_trigger_2 =='first_day_month'){
          // code add here ....
          var dateDay = new Date();
          var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
          if(!!(this.props.date_time_first_month_3)){
            var start_time_month =  this.props.date_time_first_month_3 != "" ? this.props.date_time_first_month_3.split(':') : "";
            let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
            let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
             future = new Date(firstMonthFinal);
          // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        }else{
           future = new Date(firstDay);
        }

          // future = new Date();
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, 1, future.getHours(), future.getMinutes());	

        
        }else if(this.props.start_trigger_2 =='day_of_week'){ 
          future = new Date(this.props.day_of_week_timer_get_data);
          updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7, future.getHours(), future.getMinutes());
         		
        }else if(this.props.start_trigger_2 =="custom_duration_start" ){			
         updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7);
       }
  
 // }
  }else if(this.props.end_trigger_2 == "last_day_month" && this.props.pattern == "custom"){ 

    var today = new Date();
    var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth()+1, 0);
    if(!!(this.props.end_time_month_2)){
      var end_time_month =  this.props.end_time_month_2 != "" ? this.props.end_time_month_2.split(':') : "";
      let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
      let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(lastMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );

    }else{
      Userdatetime = parseFloat(
          Math.round(parseInt(Date.parse(lastDayOfMonth) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
    }


    dateFuture = new Date(lastDayOfMonth);
        
    if(this.props.start_trigger_2 == 'date_time' ){
          future = new Date(this.props.date_time_2);
          updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes());	
          
        }else if(this.props.start_trigger_2 =='first_day_month'){

          future = new Date();
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, 1, future.getHours(), future.getMinutes());	

        
        }else if(this.props.start_trigger_2 =='day_of_week'){ 
          future = new Date(this.props.day_of_week_timer_get_data);
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, future.getDate(), future.getHours(), future.getMinutes());
         		
        }else if(this.props.start_trigger_2 =="custom_duration_start" ){			
          updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, future.getDate());
        }

  }else if(this.props.end_trigger_2 == "custom_duration_end"  && this.props.pattern == "custom"){ 

    if(this.props.start_trigger_2 == "date_time"){

        var date = new Date(this.props.date_time_2);
        dateFuture = new Date(date);
        updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes());	

    }else if(this.props.start_trigger_2 == "day_of_week"){

        var date = new Date(this.props.day_of_week_timer_get_data);
        dateFuture = new Date(date);
        future = new Date(this.props.day_of_week_timer_get_data);
        updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + 7, future.getHours(), future.getMinutes());

    }else if(this.props.start_trigger_2 == "first_day_month"  && this.props.pattern == "custom"){
        var dateDay = new Date();
        var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
        if(!!(this.props.date_time_first_month_3)){
          var start_time_month =  this.props.date_time_first_month_3 != "" ? this.props.date_time_first_month_3.split(':') : "";
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
    }else if(this.props.start_trigger_2 == "custom_duration_start"){
      var date = new Date(2/3/1970);
    }

    var addDays = this.props.expirey_days_2;
    var addHours = this.props.expirey_hours_2;
    var addMinutes = this.props.expirey_mins_2;
    var addSeconds = this.props.expirey_sec_2;
    date.setTime(date.getTime() + (addHours * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (addDays * 24 * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (addMinutes * 60 * 1000)); 
    date.setTime(date.getTime() + (addSeconds * 1000)); 

    Userdatetime = parseFloat(
      Math.round(parseInt(Date.parse(date) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
    );

    dateFuture = new Date(date);

  }else if(this.props.end_trigger_2 == "date_time"  && this.props.pattern == "custom"){ 

    updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes()); 
 //   console.log(future,"future  ..");
    Userdatetime = parseFloat(
      Math.round(parseInt(Date.parse(this.props.date_time) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
    );

     dateFuture = new Date(this.props.date_time);
    
     // var dateNow = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate());
 
    }else if(this.props.pattern == "yearly"){ 

      updateFutureDate = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate(), future.getHours(), future.getMinutes()); 
    
      var dateDay = new Date();
      if(this.props.end_day_of_month_year == 'last'){
      var firstDayYear  =  new Date(new Date(dateDay).setMonth(this.props.pattern_end_month_yearly - 1));
      var firstDay = new Date(firstDayYear.getFullYear(), firstDayYear.getMonth() + 1, 0);
      }else{  
        var firstDayMonth  =  new Date(new Date(dateDay).setMonth(this.props.pattern_end_month_yearly - 1));
        var firstDayYear = new Date(firstDayMonth.getFullYear(), firstDayMonth.getMonth(), 1);
        var firstDay  =  new Date(new Date(firstDayYear).setDate(this.props.custom_end_day_month_year));
      }

      let LastDayOfMonth = new Date(firstDay);
    
      if(!!(this.props.end_time_yearly)){
        var end_time_yearly =  this.props.end_time_yearly != "" ? this.props.end_time_yearly.split(':') : "";
        let firstMonthHours =  new Date(new Date(LastDayOfMonth).setHours(LastDayOfMonth.getHours() + end_time_yearly[0]));
        let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + end_time_yearly[1]));
        Userdatetime = parseFloat(
          Math.round(parseInt(Date.parse(firstMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
        );
        dateFuture = new Date(firstMonthFinal);
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{

      let firstMonthHours =  new Date(new Date(LastDayOfMonth).setHours(LastDayOfMonth.getHours() + '23'));
      let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + '59'));

      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(firstMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      dateFuture = new Date(firstMonthFinal);

    }

   //   console.log(future,"future  ..");
   
    //   dateFuture = new Date(this.props.end_time_yearly);
      
       // var dateNow = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate());
    
      }else if(this.props.pattern == "monthly"){ 

        updateFutureDate = new Date(future.getFullYear(), future.getMonth() + 1, future.getDate(), future.getHours(), future.getMinutes()); 
     //   console.log(future,"future  ..");
      
     var dateDay = new Date();
     if(this.props.end_day_of_month == 'last'){
       var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth() + 1, 0);
     }else{
       var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
       var firstDay  =  new Date(new Date(firstDayYear).setDate(this.props.custom_end_day_month));
     }
    
     let firstDayOfMonth = new Date(firstDay);

     if(!!(this.props.end_time_monthly)){
      var end_time_month =  this.props.end_time_monthly != "" ? this.props.end_time_monthly.split(':') : "";
      let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + end_time_month[0]));
      let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + end_time_month[1]));
    //  var date = new Date(firstMonthFinal);
      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(firstMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      dateFuture = new Date(firstMonthFinal);
    //  console.log(date,"date check ...");
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{
   //   var date = new Date(firstDayOfMonth);
      let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + '23'));
      let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + '59'));
      Userdatetime = parseFloat(
        Math.round(parseInt(Date.parse(firstMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
      );
      dateFuture = new Date(firstDayOfMonth);
    }
      
         // var dateNow = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate());
  
        }else if(this.props.pattern == "daily"){ 

          updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate(), future.getHours(), future.getMinutes()); 
       //   console.log(future,"future  ..");
       var today = new Date();
       var EndTimeDaily = new Date(today.getFullYear(), today.getMonth(),today.getDate());
       if(!!(this.props.end_time_daily)){
         var end_time_daily =  this.props.end_time_daily != "" ? this.props.end_time_daily.split(':') : "";
         let EndTimeDailyHour =  new Date(new Date(EndTimeDaily).setHours(EndTimeDaily.getHours() + end_time_daily[0]));
         let EndTimeDailyFinal =  new Date(new Date(EndTimeDailyHour).setMinutes(EndTimeDailyHour.getMinutes() + end_time_daily[1]));
         Userdatetime = parseFloat(
           Math.round(parseInt(Date.parse(EndTimeDailyFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
         );
         dateFuture = new Date(EndTimeDailyFinal);
       }else{
         Userdatetime = parseFloat(
             Math.round(parseInt(Date.parse(EndTimeDaily) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
           );
       }
  
           dateFuture = new Date(EndTimeDaily);

    //       console.log(updateFutureDate,"updateFutureDate",dateFuture,"dateFuture" );
          
           // var dateNow = new Date(future.getFullYear() + 1, future.getMonth(), future.getDate());
    
          }
    

    // else if(this.props.pattern == 'daily'){

    //  var today = new Date();
    //  var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth(), today.getDate());
    //   if(!!(this.props.end_time_daily)){
    //     var end_time_daily =  this.props.end_time_daily != "" ? this.props.end_time_daily.split(':') : "";
    //     let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_daily[0]));
    //     let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_daily[1]));
    //     Userdatetime = parseFloat(
    //       Math.round(parseInt(Date.parse(lastMonthFinal) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
    //     );

    //   }else{
    //     Userdatetime = parseFloat(
    //         Math.round(parseInt(Date.parse(lastDayOfMonth) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
    //       );
    //   }
     
    //   updateFutureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate() + this.props.pattern_daily, future.getHours(), future.getMinutes()); 
      
    //   dateFuture = new Date(lastDayOfMonth);

    // }

  //  console.log(dateFuture,"dateFuture",future,"future",updateFutureDate,"updateFutureDate");

  var futureDate = new Date(future.getFullYear(), future.getMonth(), future.getDate());
  PauseSeconds = Math.floor((dateFuture - (futureDate))/1000);
  PauseMinutes = Math.floor(PauseSeconds/60);
let  futurePauseSeconds = Math.floor((updateFutureDate - (dateFuture))/1000);
    futurePauseMinutes = Math.floor(futurePauseSeconds/60);
  totalMinutes =  PauseMinutes;

  UpdateCurrentDateTime.setTime(
    Date.parse(updateFutureDate));
  
}


//console.log(futurePauseMinutes,"futurePauseMinutes",PauseMinutes,"PauseMinutes",PauseSeconds,"PauseSeconds");
  //   if(this.props.timer_type === "2"  && this.props.end_trigger_2 == "date_time"){
    
  //     Userdatetime = parseFloat(
  //       Math.round(parseInt(Date.parse(this.props.date_time) + this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
  //     );

  //    let dateFuture = new Date(this.props.date_time);
  //     // let dateNow = new Date(this.props.date_time_2);

  //   var d = new Date(this.props.date_time_2);
  //   var year = d.getFullYear();
  //   var month = d.getMonth();
  //   var day = d.getDate();
  //   var dateNow = new Date(year + 1, month, day);

  //     PauseSeconds = Math.floor((dateFuture - (dateNow))/1000);
  //     PauseMinutes = Math.floor(PauseSeconds/60);
  //     PauseHours = Math.floor(PauseMinutes/60);
  //     PauseDays = Math.floor(PauseHours/24);
  //     PauseHours = PauseHours-(PauseDays*24);
  //     PauseMinutes = PauseMinutes-(PauseDays*24*60)-(PauseHours*60);
  //  //   seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);
  //     console.log(Userdatetime,"Userdatetime run code hours",PauseDays,"Days ...",PauseHours,"Minutes ",PauseMinutes,"seconds ","end ",dateFuture," start",dateNow);
  //  }

  //console.log("UpdateCurrentDateTime",UpdateCurrentDateTime,"Userdatetime",Userdatetime,"totalMinutes",totalMinutes,"futurePauseMinutes",futurePauseMinutes);

 // console.log(this.props.woo_pro_start_date_get_data,"woo_pro_end_date update",this.props,"woo_pro_start_date");
 
  let response_timer_type;

    if (
   Userdatetime <= CurrentDateTimeSTR &&
      this.props.timer_type === "2" 
       &&
      parseInt(totalMinutes) - parseInt(300) > 0
    ) {

      response_timer_type = this.restartOptions(
        UpdateCurrentDateTime,
        Userdatetime,
        parseInt(totalMinutes) - parseInt(300),
        1,
        this.props.auto_restart_recurrences_number,
        this.props.autorestart_recurrence,
        this.props.auto_restart_interval,
        0,
        futurePauseMinutes
      );
     
      checkPauseInterval = response_timer_type.checkPauseIntervalEnabled;
      Userdatetime = response_timer_type.UserDateTime;
    }
  //  console.log("Recurring run code");
    seconds =
      parseFloat(Userdatetime) -
      parseFloat(Math.round(parseInt(CurrentDateTime.getTime()) / 1000));

    return {
      'seconds': seconds,
      'checkPauseIntervalEnabled': checkPauseInterval
    };
    // }

  }


  fixedTimeEndDate(){
    if(this.props.end_trigger_3 == "date_time"){
      return this.props.user_defined_end_time;
    }else if(this.props.end_trigger_3 == "day_of_week"){
      return  "";
    }else if(this.props.end_trigger_3 == "last_day_month"){   
      return  "";
    }else if(this.props.end_trigger_3 == "custom_duration_end"){
      return  "";
    }
  }




  // componentWillUnmount() {
  //   clearInterval(this.interval);
  // }
 
  componentDidMount() {
    
   // $('#et-fb-start_trigger_3  .select-option-item-woo_product_start_date').hide();
    // $(' li.select-option-item.et-fb-selected-item.select-option-item-woo_product_start_date').hide();
    // $('#et-fb-start_trigger_3  .select-option-item-woo_product_start_date').hide();

    // $('.et-fb-editable-element').css({ "display": "none !important" });

    // this.interval = setInterval(() => {
    //   $('.select-option-item-woo_product_start_date').hide();
    //   console.log("check  timer interval");
    // }, 3);
     
    let seconds;

    let parentClass;
    let result = Object.values(
      this._reactInternalFiber.return.stateNode.parentNode.classList
    );
    parentClass = result.find(function (currentValue, index, arr) {
      return currentValue.match(/ditp_countdown_timer_/i);
    });


    this.setState(
      {
        parentClass: "getUtilizedTime_" + parentClass,
      },
      function () {
        seconds = this.getTotalTimeLeft();

        this.setState({
          seconds: seconds.seconds,
          checkPauseInterval: seconds.checkPauseIntervalEnabled
        });
      }
    );

  }
  componentDidUpdate(prevProps) {

    if (  
      prevProps.display_type !==  this.props.display_type ||  
      prevProps.start_day_of_yearly !==  this.props.start_day_of_yearly ||
      prevProps.start_time_yearly !==  this.props.start_time_yearly ||
      prevProps.end_time_yearly !==  this.props.end_time_yearly ||
      prevProps.end_day_of_month_year !==  this.props.end_day_of_month_year ||
      prevProps.custom_end_day_month_year !==  this.props.custom_end_day_month_year ||
      prevProps.end_day_of_month !==  this.props.end_day_of_month ||
      prevProps.start_day_of_month !==  this.props.start_day_of_month ||
      prevProps.custom_start_day_month !==  this.props.custom_start_day_month ||
      prevProps.custom_end_day_month !==  this.props.custom_end_day_month ||
      prevProps.pattern_start_month_yearly !==  this.props.pattern_start_month_yearly ||
      prevProps.pattern_weekly_end_date !== this.props.pattern_weekly_end_date ||  
      prevProps.pattern_weekly !== this.props.pattern_weekly || 
      prevProps.pattern !== this.props.pattern || 
      prevProps.pattern_daily !== this.props.pattern_daily ||  
      prevProps.start_time_daily !== this.props.start_time_daily ||  
      prevProps.end_time_daily !== this.props.end_time_daily ||  
      prevProps.start_time_weekly !== this.props.start_time_weekly ||  
      prevProps.end_time_weekly !== this.props.end_time_weekly ||  
      prevProps.start_time_monthly !== this.props.start_time_monthly ||  
      prevProps.end_time_monthly !== this.props.end_time_monthly ||
      prevProps.start_time_yearly !== this.props.start_time_yearly ||  
      prevProps.end_time_yearly !== this.props.end_time_yearly ||
      prevProps.pattern_day !== this.props.pattern_day ||
      prevProps.date_time_2 !== this.props.date_time_2 ||  
      prevProps.date_time_first_month_3 !== this.props.date_time_first_month_3 ||  
      prevProps.date_time_first_month_2 !== this.props.date_time_first_month_2 ||
      prevProps.day_of_week_start_2 !== this.props.day_of_week_start_2 ||
      prevProps.start_expirey_days_2 !== this.props.start_expirey_days_2 ||
      prevProps.start_expirey_hours_2 !== this.props.start_expirey_hours_2 ||
      prevProps.start_expirey_mins_2 !== this.props.start_expirey_mins_2 ||
      prevProps.start_expirey_sec_2 !== this.props.start_expirey_sec_2 ||
      prevProps.expirey_days_2 !== this.props.expirey_days_2 ||
      prevProps.expirey_hours_2 !== this.props.expirey_hours_2 ||
      prevProps.expirey_mins_2 !== this.props.expirey_mins_2 || 
      prevProps.expirey_sec_2 !== this.props.expirey_sec_2 || 
      prevProps.end_time_2 !== this.props.end_time_2 ||
      prevProps.end_time_month_2 !== this.props.end_time_month_2 ||
      prevProps.start_trigger_2 !== this.props.start_trigger_2 ||
      prevProps.date_time_3 !== this.props.date_time_3 ||
      prevProps.day_of_week_start_3 !== this.props.day_of_week_start_3 ||
      prevProps.start_expirey_days_3 !== this.props.start_expirey_days_3 ||
      prevProps.start_expirey_hours_3 !== this.props.start_expirey_hours_3 ||
      prevProps.start_expirey_mins_3 !== this.props.start_expirey_mins_3 ||
      prevProps.start_expirey_sec_3 !== this.props.start_expirey_sec_3 ||
      prevProps.day_of_week_timer_get_data !== this.props.day_of_week_timer_get_data ||
      prevProps.day_of_week_timer_fixed !== this.props.day_of_week_timer_fixed ||
      prevProps.woo_pro_start_date_get_data !== this.props.woo_pro_start_date_get_data ||
      prevProps.woo_pro_end_date_get_data !== this.props.woo_pro_end_date_get_data ||
      prevProps.day_of_week_end_3 !== this.props.day_of_week_end_3 ||
      prevProps.start_date_time_3 !== this.props.start_date_time_3 ||
      prevProps.start_trigger_3 !== this.props.start_trigger_3 ||
      prevProps.expirey_days_3 !== this.props.expirey_days_3 ||
      prevProps.expirey_hours_3 !== this.props.expirey_hours_3 ||
      prevProps.expirey_mins_3 !== this.props.expirey_mins_3 ||
      prevProps.expirey_sec_3 !== this.props.expirey_sec_3 ||
      prevProps.end_time_month_3 !== this.props.end_time_month_3 ||
      prevProps.end_trigger_3 !== this.props.end_trigger_3 ||
      prevProps.expirey_days !== this.props.expirey_days ||
      prevProps.expirey_hours !== this.props.expirey_hours ||
      prevProps.expirey_mins !== this.props.expirey_mins ||
      prevProps.expirey_sec !== this.props.expirey_sec ||
      prevProps.date_time !== this.props.date_time ||
      prevProps.restart_type !== this.props.restart_type ||
      prevProps.timer_type !== this.props.timer_type ||
      prevProps.user_defined_end_time !== this.props.user_defined_end_time ||
      prevProps.display_message_show_hide !== this.props.display_message_show_hide ||
      prevProps.show_more_info_button !== this.props.show_more_info_button ||
      prevProps.cookie_duration !== this.props.cookie_duration ||
      prevProps.cookie_duration_days !== this.props.cookie_duration_days ||
      prevProps.cookie_duration_hours !== this.props.cookie_duration_hours ||
      prevProps.cookie_duration_mins !== this.props.cookie_duration_mins
    ) {
      let timeChange = false;
      if (
        prevProps.display_type !==  this.props.display_type || 
        prevProps.start_day_of_yearly !==  this.props.start_day_of_yearly ||
        prevProps.start_time_yearly !==  this.props.start_time_yearly ||
        prevProps.end_time_yearly !==  this.props.end_time_yearly ||
        prevProps.end_day_of_month_year !==  this.props.end_day_of_month_year ||
        prevProps.custom_end_day_month_year !==  this.props.custom_end_day_month_year ||
        prevProps.end_day_of_month !==  this.props.end_day_of_month ||
        prevProps.start_day_of_month !==  this.props.start_day_of_month ||
        prevProps.custom_start_day_month !==  this.props.custom_start_day_month ||
        prevProps.custom_end_day_month !==  this.props.custom_end_day_month ||
        prevProps.pattern_start_month_yearly !==  this.props.pattern_start_month_yearly ||
        prevProps.pattern_weekly_end_date !== this.props.pattern_weekly_end_date ||  
        prevProps.pattern_weekly !== this.props.pattern_weekly || 
        prevProps.pattern !== this.props.pattern || 
        prevProps.pattern_daily !== this.props.pattern_daily ||  
        prevProps.start_time_daily !== this.props.start_time_daily ||  
        prevProps.end_time_daily !== this.props.end_time_daily ||  
        prevProps.start_time_weekly !== this.props.start_time_weekly ||  
        prevProps.end_time_weekly !== this.props.end_time_weekly ||  
        prevProps.start_time_monthly !== this.props.start_time_monthly ||  
        prevProps.end_time_monthly !== this.props.end_time_monthly ||
        prevProps.start_time_yearly !== this.props.start_time_yearly ||  
        prevProps.end_time_yearly !== this.props.end_time_yearly ||
        prevProps.pattern_day !== this.props.pattern_day || 
        prevProps.date_time_2 !== this.props.date_time_2 ||  
        prevProps.date_time_first_month_3 !== this.props.date_time_first_month_3 ||  
        prevProps.date_time_first_month_2 !== this.props.date_time_first_month_2 ||
        prevProps.day_of_week_start_2 !== this.props.day_of_week_start_2 ||
        prevProps.start_expirey_days_2 !== this.props.start_expirey_days_2 ||
        prevProps.start_expirey_hours_2 !== this.props.start_expirey_hours_2 ||
        prevProps.start_expirey_mins_2 !== this.props.start_expirey_mins_2 ||
        prevProps.start_expirey_sec_2 !== this.props.start_expirey_sec_2 ||
        prevProps.expirey_days_2 !== this.props.expirey_days_2 ||
        prevProps.expirey_hours_2 !== this.props.expirey_hours_2 ||
        prevProps.expirey_mins_2 !== this.props.expirey_mins_2 || 
        prevProps.expirey_sec_2 !== this.props.expirey_sec_2 || 
        prevProps.end_time_2 !== this.props.end_time_2 ||
        prevProps.end_time_month_2 !== this.props.end_time_month_2 ||
        prevProps.start_trigger_2 !== this.props.start_trigger_2 ||
        prevProps.date_time_3 !== this.props.date_time_3 ||
        prevProps.day_of_week_start_3 !== this.props.day_of_week_start_3 ||
        prevProps.start_expirey_days_3 !== this.props.start_expirey_days_3 ||
        prevProps.start_expirey_hours_3 !== this.props.start_expirey_hours_3 ||
        prevProps.start_expirey_mins_3 !== this.props.start_expirey_mins_3 || 
        prevProps.start_expirey_sec_3 !== this.props.start_expirey_sec_3 ||   
        prevProps.day_of_week_timer_get_data !== this.props.day_of_week_timer_get_data ||
        prevProps.day_of_week_timer_fixed !== this.props.day_of_week_timer_fixed ||
        prevProps.woo_pro_start_date_get_data !== this.props.woo_pro_start_date_get_data ||
        prevProps.woo_pro_end_date_get_data !== this.props.woo_pro_end_date_get_data ||
        prevProps.day_of_week_end_3 !== this.props.day_of_week_end_3 ||
        prevProps.start_date_time_3 !== this.props.start_date_time_3 ||
        prevProps.start_trigger_3 !== this.props.start_trigger_3 ||
        prevProps.expirey_days_3 !== this.props.expirey_days_3 ||
        prevProps.expirey_hours_3 !== this.props.expirey_hours_3 ||
        prevProps.expirey_mins_3 !== this.props.expirey_mins_3 ||
        prevProps.expirey_sec_3 !== this.props.expirey_sec_3 ||
        prevProps.end_time_month_3 !== this.props.end_time_month_3 ||
        prevProps.end_trigger_3 !== this.props.end_trigger_3 ||
        prevProps.expirey_days !== this.props.expirey_days ||
        prevProps.expirey_hours !== this.props.expirey_hours ||
        prevProps.expirey_mins !== this.props.expirey_mins ||
        prevProps.expirey_sec !== this.props.expirey_sec ||
        prevProps.timer_type !== this.props.timer_type ||
        prevProps.user_defined_end_time !== this.props.user_defined_end_time ||
        prevProps.display_message_show_hide !== this.props.display_message_show_hide ||
        prevProps.show_more_info_button !== this.props.show_more_info_button ||
        prevProps.cookie_duration_days !== this.props.cookie_duration_days ||
        prevProps.cookie_duration_hours !== this.props.cookie_duration_hours ||
        prevProps.cookie_duration_mins !== this.props.cookie_duration_mins
      )
        timeChange = true;


      let seconds = this.getTotalTimeLeft(timeChange);
      if (seconds.seconds < 0) {
        // seconds=0;
        this.setState({
          seconds: 0,
        });
      }
      else {

        this.setState({
          seconds: seconds.seconds,
          checkPauseInterval: seconds.checkPauseIntervalEnabled
        });
        // this.setState({
        //   seconds: seconds,
        // });
      }

    }
  }

  timerEnd(event) {

  
    if (this.props.timer_type === "2") {
      let seconds = this.getTotalTimeLeft();
      if (seconds.seconds < 0) {
        seconds.seconds = 0;
      }

      this.setState({
        seconds: seconds.seconds,
        checkPauseInterval: seconds.checkPauseIntervalEnabled
      },
        function () {

          return seconds.seconds + 1;
        }
      );

      return seconds.seconds + 1;

    } else {

      this.setState({
        seconds: 0,
      });
    }
  }

  render() {

  let TestDateTime = new Date();
  let CurrentDateTime = new Date(
      TestDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );

   let CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

let Userdefinedatetime = 0;
if(this.props.timer_type === "3") {


  if(this.props.start_trigger_3 == "woo_product_start_date"){ 
   
    let DayOfWeekDateTime = new Date(this.props.woo_pro_start_date_get_data);
  
    CurrentDateTime = new Date(
      DayOfWeekDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
  
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

//    console.log(Userdefinedatetime,"woocommerce");
  
  }else if(this.props.start_trigger_3 == "next_upcoming_event_start_date"){

  if(!!(this.props.next_upcoming_event_get_date)){
    CurrentDateTime = new Date(this.props.next_upcoming_event_get_date);
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

     CurrentDateTimeSTR = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );

  }else{
    Userdefinedatetime = "";
  }

}else if(this.props.start_trigger_3 == "date_time"){ 

  let date_time = new Date(this.props.start_date_time_3);

  CurrentDateTime = new Date(
    date_time.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
  );

  Userdefinedatetime = parseFloat(
    Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
  );

 }else if(this.props.start_trigger_3 == "day_of_week"){ 
   
  let DayOfWeekDateTime = new Date(this.props.day_of_week_timer_get_data);

  CurrentDateTime = new Date(
    DayOfWeekDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
  );

  Userdefinedatetime = parseFloat(
    Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
  );

}else if(this.props.start_trigger_3 == "first_day_month"){
       var date = new Date();
       var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);

       let firstDayOfMonth = new Date(firstDay);

       if(!!(this.props.date_time_first_month_3)){
        var start_time_month =  this.props.date_time_first_month_3 != "" ? this.props.date_time_first_month_3.split(':') : "";
        let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
        let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
        var date = new Date(firstMonthFinal);
      //  console.log(date,"date check ...");
        // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
      }else{
        var date = new Date(firstDayOfMonth);
      }

       CurrentDateTime = new Date(
        date.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
       );
     
       Userdefinedatetime = parseFloat(
         Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
       );

}else if(this.props.start_trigger_3 == "custom_duration_start"){

  if(this.props.end_trigger_3 == "date_time"){  
    var date = new Date(this.props.user_defined_end_time);
 }else if(this.props.end_trigger_3 == "last_day_month"){

  let lastMonthDate = 0;
  var today = new Date();
  var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth()+1, 0);
  if(!!(this.props.end_time_month_3)){
    var end_time_month =  this.props.end_time_month_3 != "" ? this.props.end_time_month_3.split(':') : "";
    let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
    let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
    lastMonthDate = lastMonthFinal;
    // var date = new Date();
    // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
  }else{
    lastMonthDate = lastDayOfMonth;
  }
    var date = new Date(lastMonthDate);
 }else if(this.props.end_trigger_3 == "day_of_week"){

 // if (this.props.day_of_week_timer_fixed != null) {
     var date = new Date(this.props.day_of_week_timer_fixed);
// }

 }else{
  var date = new Date();
 }

  var addDays = this.props.start_expirey_days_3;
  var addHours = this.props.start_expirey_hours_3;
  var addMinutes = this.props.start_expirey_mins_3;
  var addSeconds = this.props.start_expirey_sec_3;
  date.setTime(date.getTime() - (addHours * 60 * 60 * 1000)); 
  date.setTime(date.getTime() - (addDays * 24 * 60 * 60 * 1000)); 
  date.setTime(date.getTime() - (addMinutes * 60 * 1000)); 
  date.setTime(date.getTime() - (addSeconds * 1000)); 

  let StartCustomDuration = new Date(date);

  CurrentDateTime = new Date(
    StartCustomDuration.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
  );

  Userdefinedatetime = parseFloat(
    Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
  );

 

}



}else if(this.props.timer_type === "2"){



  // if(this.props.pattern == 'daily'){

  //   var date = new Date();
  //   var firstDaily = new Date(date.getFullYear(), date.getMonth(), date.getDate());

  //   let first_daily = new Date(firstDaily);

  //   if(!!(this.props.start_time_daily)){
  //    var start_time_daily =  this.props.start_time_daily != "" ? this.props.start_time_daily.split(':') : "";
  //    let firstDayHours =  new Date(new Date(firstDaily).setHours(firstDaily.getHours() + start_time_daily[0]));
  //    let firstMonthFinal =  new Date(new Date(firstDayHours).setMinutes(firstDayHours.getMinutes() + start_time_daily[1]));
  //    var date = new Date(firstMonthFinal);
  //    console.log(date,"date check ...");
  //    // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
  //  }else{
  //    var date = new Date(date);
  //  }

  //   CurrentDateTime = new Date(
  //    date.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
  //   );
  
  //   Userdefinedatetime = parseFloat(
  //     Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
  //   );

  //   console.log(CurrentDateTime,"date check ...",Userdefinedatetime,"Userdefinedatetime....");

  // }else 


  if(this.props.pattern == "weekly"){ 
  
        let DayOfWeekDateTime = new Date(this.props.day_of_week_timer_get_data);
  
        CurrentDateTime = new Date(
          DayOfWeekDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
        );
     
        Userdefinedatetime = parseFloat(
          Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
        );

  
   }else if(this.props.pattern == "daily"){ 

    var dateDaily = new Date();
         var DailyTimePettern = new Date(dateDaily.getFullYear(), dateDaily.getMonth(),  dateDaily.getDate() );
  
         let DailyTimePetterns = new Date(DailyTimePettern);
         if(!!(this.props.start_time_daily)){
          var start_time_daily =  this.props.start_time_daily != "" ? this.props.start_time_daily.split(':') : "";
          let DailyTimePetternHours =  new Date(new Date(DailyTimePetterns).setHours(DailyTimePetterns.getHours() + start_time_daily[0]));
          let DailyTimePetternFinal =  new Date(new Date(DailyTimePetternHours).setMinutes(DailyTimePetternHours.getMinutes() + start_time_daily[1]));
          var date = new Date(DailyTimePetternFinal);
        //  console.log(date,"date check ...");
          // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        }else{
          var date = new Date(DailyTimePetterns);
        }
  
         CurrentDateTime = new Date(
          date.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
         );
       
         Userdefinedatetime = parseFloat(
           Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
         );
  
   }else if(this.props.pattern == "yearly"){ 

    var dateDay = new Date();
    if(this.props.start_day_of_yearly == 'first'){
    var firstDayYear  =  new Date(new Date(dateDay).setMonth(this.props.pattern_start_month_yearly - 1));
    var firstDay = new Date(firstDayYear.getFullYear(), firstDayYear.getMonth(), 1);
    }else{
      var firstDayYear  =  new Date(new Date(dateDay).setMonth(this.props.pattern_start_month_yearly - 1));
      var firstDayMonth = new Date(firstDayYear.getFullYear(), firstDayYear.getMonth(), 1);
      var firstDay  =  new Date(new Date(firstDayMonth).setDate(this.props.custom_start_day_yearly));
    }
 
    let firstDayOfMonth = new Date(firstDay);
  

    if(!!(this.props.start_time_yearly)){
     var start_time_month =  this.props.start_time_yearly != "" ? this.props.start_time_yearly.split(':') : "";
     let firstMonthHours =  new Date(new Date(firstDayOfMonth).setHours(firstDayOfMonth.getHours() + start_time_month[0]));
     let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
     var date = new Date(firstMonthFinal);
   //  console.log(date,"date check ...");
     // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
   }else{
     var date = new Date(firstDayOfMonth);
   }

  // let date_time_yearly = new Date(date);
  
    CurrentDateTime = new Date(
      date.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
  
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );
  
   }else if(this.props.pattern == "monthly"){ 

    var dateDay = new Date();
    if(this.props.start_day_of_month == 'first'){
      var firstDay = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
    }else{
      var firstDayYear = new Date(dateDay.getFullYear(), dateDay.getMonth(), 1);
      var firstDay  =  new Date(new Date(firstDayYear).setDate(this.props.custom_start_day_month));
    }
   
    let firstDayOfMonth = new Date(firstDay);

    if(!!(this.props.start_time_monthly)){
     var start_time_month =  this.props.start_time_monthly != "" ? this.props.start_time_monthly.split(':') : "";
     let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
     let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
     var date = new Date(firstMonthFinal);
   //  console.log(date,"date check ...");
     // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
   }else{
     var date = new Date(firstDayOfMonth);
   }

    let date_time_monthly = new Date(date);
  
    CurrentDateTime = new Date(
      date_time_monthly.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
  
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );
  
   }else if(this.props.start_trigger_2 == "date_time" ){ 

    let date_time = new Date(this.props.date_time_2);
  
    CurrentDateTime = new Date(
      date_time.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
  
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );
  
   }else if(this.props.start_trigger_2 == "day_of_week"){ 
     
    let DayOfWeekDateTime = new Date(this.props.day_of_week_timer_get_data);
  
    CurrentDateTime = new Date(
      DayOfWeekDateTime.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );

   // console.log(CurrentDateTime,"day_of_week_timer_get_data",this.props.day_of_week_timer_get_data,"this.props.day_of_week_timer_get_data",DayOfWeekDateTime,"DayOfWeekDateTime");
  
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );
  
  }else if(this.props.start_trigger_2 == "first_day_month"){
         var date = new Date();
         var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
  
         let firstDayOfMonth = new Date(firstDay);
  
         if(!!(this.props.date_time_first_month_2)){
          var start_time_month =  this.props.date_time_first_month_2 != "" ? this.props.date_time_first_month_2.split(':') : "";
          let firstMonthHours =  new Date(new Date(firstDay).setHours(firstDay.getHours() + start_time_month[0]));
          let firstMonthFinal =  new Date(new Date(firstMonthHours).setMinutes(firstMonthHours.getMinutes() + start_time_month[1]));
          var date = new Date(firstMonthFinal);
        //  console.log(date,"date check ...");
          // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        }else{
          var date = new Date(firstDayOfMonth);
        }
  
         CurrentDateTime = new Date(
          date.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
         );
       
         Userdefinedatetime = parseFloat(
           Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
         );
  
  }else if(this.props.start_trigger_2 == "custom_duration_start"){

    if(this.props.end_trigger_2 == "date_time"){  
      var date = new Date(this.props.date_time);
   }else if(this.props.end_trigger_2 == "last_day_month"){
  
    let lastMonthDate = 0;
    var today = new Date();
    var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);
    if(!!(this.props.end_time_month_2)){
      var end_time_month =  this.props.end_time_month_2 != "" ? this.props.end_time_month_2.split(':') : "";
      let lastMonthHours =  new Date(new Date(lastDayOfMonth).setHours(lastDayOfMonth.getHours() + end_time_month[0]));
      let lastMonthFinal =  new Date(new Date(lastMonthHours).setMinutes(lastMonthHours.getMinutes() + end_time_month[1]));
      lastMonthDate = lastMonthFinal;
      // var date = new Date();
      // var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    }else{
      lastMonthDate = lastDayOfMonth;
    }
      var date = new Date(lastMonthDate);
   }else if(this.props.end_trigger_2 == "day_of_week"){
  
   // if (this.props.day_of_week_timer_fixed != null) {
       var date = new Date(this.props.day_of_week_timer_fixed);
  // }
  
   }else{
    var date = new Date();
   }
  
    var addDays = this.props.start_expirey_days_2;
    var addHours = this.props.start_expirey_hours_2;
    var addMinutes = this.props.start_expirey_mins_2;
    var addSeconds = this.props.start_expirey_sec_2;
    date.setTime(date.getTime() - (addHours * 60 * 60 * 1000)); 
    date.setTime(date.getTime() - (addDays * 24 * 60 * 60 * 1000)); 
    date.setTime(date.getTime() - (addMinutes * 60 * 1000)); 
    date.setTime(date.getTime() - (addSeconds * 1000)); 
  
    let StartCustomDuration = new Date(date);
  
    CurrentDateTime = new Date(
      StartCustomDuration.getTime() + this.props.WPtimeZoneOffset * 3600 * 1000
    );
  
    Userdefinedatetime = parseFloat(
      Math.round(parseInt(CurrentDateTime.getTime()) / 1000)
    );


    // Userdefinedatetime = parseFloat(
    //   Math.round(parseInt(CurrentDateTime.getTime()  +  this.props.WPtimeZoneOffset * 3600 * 1000) / 1000)
    // );
  
  }

}

//console.log(date,"date 12345");
//return hours+':'+minutes+':'+seconds;
//console.log(Userdefinedatetime,"Userdefinedatetime",CurrentDateTimeSTR,"CurrentDateTimeSTR",CurrentDateTime,hours+':'+minutes+':'+seconds);

//var total  = (Userdefinedatetime - CurrentDateTimeSTR) / this.state.seconds;


    const stratTime = Date.now(Userdefinedatetime) / 1000; // use UNIX timestamp in seconds
    var seconds_str = this.state.seconds != undefined ? this.state.seconds: 0;
    const endTime = stratTime + seconds_str; // use UNIX timestamp in seconds


        const date = new Date();

        const sec =  parseInt(this.state.seconds, 10); // convert value to number if it's string
        let AddDays = Math.floor(sec / (3600 * 24));
        let hours   = Math.floor(sec / 3600); // get hours
        let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
        let seconds = sec - (hours * 3600) - (minutes * 60);
    
      //  date.setTime(date.getTime() + (AddDays * 24 * 60 * 60 * 1000)); 
        date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); 
        date.setTime(date.getTime() + (minutes * 60 * 1000)); 
        date.setTime(date.getTime() + (seconds * 1000)); 

        if(AddDays < 2){
          var custom_days_label_text =  this.props.singular_custom_days_label_text;
        }else{
          var custom_days_label_text =  this.props.custom_days_label_text;
        }

        if(hours < 2){
           var custom_hours_label_text =  this.props.singular_custom_hours_label_text;       
        }else{
           var custom_hours_label_text =  this.props.custom_hours_label_text;
        }

          if(minutes < 2){
            var custom_minutes_label_text =  this.props.singular_custom_minutes_label_text;       
          }else{
            var custom_minutes_label_text =  this.props.custom_minutes_label_text;
          }

          if(seconds < 2){
            var custom_seconds_label_text =  this.props.singular_custom_seconds_label_text;       
          }else{
            var custom_seconds_label_text =  this.props.custom_seconds_label_text;
           }


      var  Userdefinedatetime_flip = parseFloat(
            Math.round(parseInt(Date.parse(date + this.props.WPtimeZoneOffset * 3600 * 1000)) / 1000)
          );

     let changeFormat =  moment(new Date((Userdefinedatetime_flip) + this.props.WPtimeZoneOffset * 3600 * 1000)).format('MM DD YYYY, HH:mm:ss');


//console.log(moment(new Date(Userdefinedatetime_flip)).format('MM DD YYYY, HH:mm:ss'),"$total",this.state.seconds,"this.state.seconds",stratTime,"stratTime ");

if (this.props.display_type === "text_timer" ) {  
var settings_text = {
  count: this.state.seconds,
  // border: true,
  showTitle: null,
  noPoints: false,
  // direction: "left",
  // dayTitle: "Not ",
  // hourTitle: "Not ",
  // minuteTitle: "",
  // secondTitle: "",
    size: 17,
    className: " et_pb_countdown_timer_container dp_countdown_text_timer clearfix ",
    responsive: true,
    timer_type: this.props.timer_type,
    expirey_day: this.props.expirey_days,
    expirey_hour: this.props.expirey_hours,
    expirey_min: this.props.expirey_mins,
    start_date_time: this.props.date_time,
    parentClass: this.state.parentClass,
    background_layout: this.props.background_layout,
    show_days: this.props.show_days,
    show_hours: this.props.show_hours,
    show_minutes: this.props.show_minutes,
    show_seconds: this.props.show_seconds,
    show_separator_first: this.props.show_separator_first,
    show_separator_second: this.props.show_separator_first,
    show_separator_third: this.props.show_separator_first,
    custom_days_label_text: custom_days_label_text,
    custom_hours_label_text: custom_hours_label_text,
    custom_minutes_label_text: custom_minutes_label_text,
    custom_seconds_label_text: custom_seconds_label_text,
    checkPauseInterval: this.state.checkPauseInterval,
    hide_day_leading_zero: this.props.hide_day_leading_zero,
    hide_all_leading_zero: this.props.hide_all_leading_zero,
    hide_day_leading_zero: this.props.hide_day_leading_zero,
    hide_all_leading_zero: this.props.hide_all_leading_zero,
    display_type: this.props.display_type,
    onEnd: this.timerEnd,
}
}

    if (this.state.seconds > 0) {

      if (CurrentDateTimeSTR >=  Userdefinedatetime && this.props.timer_type === "3") {
        var settings = {
          count: this.state.seconds,
           // border: true,
           showTitle: true,
           noPoints: false,
           direction: "left",
           dayTitle: "Day(s)",
           hourTitle: "Hour(s)",
           minuteTitle: "Minute(s)",
           secondTitle: "Second(s)",
           size: 54,
           className: " et_pb_countdown_timer_container clearfix ",
           responsive: true,
           timer_type: this.props.timer_type,
           expirey_day: this.props.expirey_days,
           expirey_hour: this.props.expirey_hours,
           expirey_min: this.props.expirey_mins,
           start_date_time: this.props.date_time,
           parentClass: this.state.parentClass,
           background_layout: this.props.background_layout,
           show_days: this.props.show_days,
           show_hours: this.props.show_hours,
           show_minutes: this.props.show_minutes,
           show_seconds: this.props.show_seconds,
           show_separator_first: this.props.show_separator_first,
           show_separator_second: this.props.show_separator_first,
           show_separator_third: this.props.show_separator_first,
           custom_days_label_text: custom_days_label_text,
           custom_hours_label_text: custom_hours_label_text,
           custom_minutes_label_text: custom_minutes_label_text,
           custom_seconds_label_text: custom_seconds_label_text,
           checkPauseInterval: this.state.checkPauseInterval,
           hide_day_leading_zero: this.props.hide_day_leading_zero,
           hide_all_leading_zero: this.props.hide_all_leading_zero,
           display_type: this.props.display_type,
           onEnd: this.timerEnd,
         };
         var flip_compoents = ( <FlipCountdown 
          hideDay = {this.props.show_days === "on" ? false : true}
          hideHour = {this.props.show_hours === "on" ? false : true}
          hideMinute = {this.props.show_minutes === "on" ? false : true}
          hideSecond = {this.props.show_seconds === "on" ? false : true}
          dayTitle =  {custom_days_label_text}
          hourTitle = {custom_hours_label_text}
          minuteTitle = {custom_minutes_label_text}
          secondTitle = {custom_seconds_label_text}
          hideDayLeadingZero = {this.props.hide_day_leading_zero}
          hideAllLeadingZero = {this.props.hide_all_leading_zero}
          show_separator_first = {this.props.show_separator_first}
          show_separator_second = {this.props.show_separator_first}
          show_separator_third = {this.props.show_separator_first}
          theme='light'
          size='large'
          titlePosition='bottom'
          endAtZero
          endAt={date}
          onEnd= {this.timerEnd}
          />);

          var Countdown = {
            count: this.state.seconds,
            endDate: Userdefinedatetime,
            currentdate: CurrentDateTimeSTR,
          }
  
  
         var custom_circle_time_labels = {
              custom_days_label_text: custom_days_label_text,
              custom_hours_label_text: custom_hours_label_text,
              custom_minutes_label_text: custom_minutes_label_text,
              custom_seconds_label_text: custom_seconds_label_text,
          }

          var circle_components =( <CircleCountdown values={this.props} count={Countdown} labels={custom_circle_time_labels}/>);
    
        }else if(this.state.seconds > 0 && this.props.timer_type === "1"){
          var settings = {
            count: this.state.seconds,
             // border: true,
             showTitle: true,
             noPoints: false,
             direction: "left",
             dayTitle: "Day(s)",
             hourTitle: "Hour(s)",
             minuteTitle: "Minute(s)",
             secondTitle: "Second(s)",
             size: 54,
             className: " et_pb_countdown_timer_container clearfix ",
             responsive: true,
             timer_type: this.props.timer_type,
             expirey_day: this.props.expirey_days,
             expirey_hour: this.props.expirey_hours,
             expirey_min: this.props.expirey_mins,
             start_date_time: this.props.date_time,
             parentClass: this.state.parentClass,
             background_layout: this.props.background_layout,
             show_days: this.props.show_days,
             show_hours: this.props.show_hours,
             show_minutes: this.props.show_minutes,
             show_seconds: this.props.show_seconds,
             show_separator_first: this.props.show_separator_first,
             show_separator_second: this.props.show_separator_first,
             show_separator_third: this.props.show_separator_first,
             custom_days_label_text: custom_days_label_text,
             custom_hours_label_text: custom_hours_label_text,
             custom_minutes_label_text: custom_minutes_label_text,
             custom_seconds_label_text: custom_seconds_label_text,
             checkPauseInterval: this.state.checkPauseInterval,
             hide_day_leading_zero: this.props.hide_day_leading_zero,
             hide_all_leading_zero: this.props.hide_all_leading_zero,
             display_type: this.props.display_type,
             onEnd: this.timerEnd,
           };
           var flip_compoents = ( <FlipCountdown 
            hideDay = {this.props.show_days === "on" ? false : true}
            hideHour = {this.props.show_hours === "on" ? false : true}
            hideMinute = {this.props.show_minutes === "on" ? false : true}
            hideSecond = {this.props.show_seconds === "on" ? false : true}
            dayTitle =  {custom_days_label_text}
            hourTitle = {custom_hours_label_text}
            minuteTitle = {custom_minutes_label_text}
            secondTitle = {custom_seconds_label_text}
            hideDayLeadingZero = {this.props.hide_day_leading_zero}
            hideAllLeadingZero = {this.props.hide_all_leading_zero}
            show_separator_first = {this.props.show_separator_first}
            show_separator_second = {this.props.show_separator_first}
            show_separator_third = {this.props.show_separator_first}
            theme='light'
            size='large'
            titlePosition='bottom'
            endAtZero
            endAt={date}
            onEnd= {this.timerEnd}
            />);

            var Countdown = {
              count: this.state.seconds,
              endDate: Userdefinedatetime,
              currentdate: CurrentDateTimeSTR,
            }
    
    
           var custom_circle_time_labels = {
                custom_days_label_text: custom_days_label_text,
                custom_hours_label_text: custom_hours_label_text,
                custom_minutes_label_text: custom_minutes_label_text,
                custom_seconds_label_text: custom_seconds_label_text,
            }
  
            var circle_components =( <CircleCountdown values={this.props} count={Countdown} labels={custom_circle_time_labels}/>);
   
        }else if(CurrentDateTimeSTR >=  Userdefinedatetime  && this.props.timer_type === "2"){
          var settings = {
            count: this.state.seconds,
             // border: true,
             showTitle: true,
             noPoints: false,
             direction: "left",
             dayTitle: "Day(s)",
             hourTitle: "Hour(s)",
             minuteTitle: "Minute(s)",
             secondTitle: "Second(s)",
             size: 54,
             className: " et_pb_countdown_timer_container clearfix ",
             responsive: true,
             timer_type: this.props.timer_type,
             expirey_day: this.props.expirey_days,
             expirey_hour: this.props.expirey_hours,
             expirey_min: this.props.expirey_mins,
             start_date_time: this.props.date_time,
             parentClass: this.state.parentClass,
             background_layout: this.props.background_layout,
             show_days: this.props.show_days,
             show_hours: this.props.show_hours,
             show_minutes: this.props.show_minutes,
             show_seconds: this.props.show_seconds,
             show_separator_first: this.props.show_separator_first,
             show_separator_second: this.props.show_separator_first,
             show_separator_third: this.props.show_separator_first,
             custom_days_label_text: custom_days_label_text,
             custom_hours_label_text: custom_hours_label_text,
             custom_minutes_label_text: custom_minutes_label_text,
             custom_seconds_label_text: custom_seconds_label_text,
             checkPauseInterval: this.state.checkPauseInterval,
             hide_day_leading_zero: this.props.hide_day_leading_zero,
             hide_all_leading_zero: this.props.hide_all_leading_zero,
             display_type: this.props.display_type,
             onEnd: this.timerEnd,
           };

           var flip_compoents = ( <FlipCountdown 
            hideDay = {this.props.show_days === "on" ? false : true}
            hideHour = {this.props.show_hours === "on" ? false : true}
            hideMinute = {this.props.show_minutes === "on" ? false : true}
            hideSecond = {this.props.show_seconds === "on" ? false : true}
            dayTitle =  {custom_days_label_text}
            hourTitle = {custom_hours_label_text}
            minuteTitle = {custom_minutes_label_text}
            secondTitle = {custom_seconds_label_text}
            hideDayLeadingZero = {this.props.hide_day_leading_zero}
            hideAllLeadingZero = {this.props.hide_all_leading_zero}
            show_separator_first = {this.props.show_separator_first}
            show_separator_second = {this.props.show_separator_first}
            show_separator_third = {this.props.show_separator_first}
            theme='light'
            size='large'
            titlePosition='bottom'
            endAtZero
            endAt={date}
            onEnd= {this.timerEnd}
            />);

            var Countdown = {
              count: this.state.seconds,
              endDate: Userdefinedatetime,
              currentdate: CurrentDateTimeSTR,
            }
    
    
           var custom_circle_time_labels = {
                custom_days_label_text: custom_days_label_text,
                custom_hours_label_text: custom_hours_label_text,
                custom_minutes_label_text: custom_minutes_label_text,
                custom_seconds_label_text: custom_seconds_label_text,
            }
  
            var circle_components =( <CircleCountdown values={this.props} count={Countdown} labels={custom_circle_time_labels}/>);

        }else{
          var settings = {
          //  count: 0,
           // border: true,
           showTitle: true,
           noPoints: false,
           direction: "left",
           dayTitle: "Day(s)",
           hourTitle: "Hour(s)",
           minuteTitle: "Minute(s)",
           secondTitle: "Second(s)",
           size: 54,
           className: " et_pb_countdown_timer_container clearfix ",
           responsive: true,
           timer_type: this.props.timer_type,
           expirey_day: this.props.expirey_days,
           expirey_hour: this.props.expirey_hours,
           expirey_min: this.props.expirey_mins,
           start_date_time: this.props.date_time,
           parentClass: this.state.parentClass,
           background_layout: this.props.background_layout,
           show_days: this.props.show_days,
           show_hours: this.props.show_hours,
           show_minutes: this.props.show_minutes,
           show_seconds: this.props.show_seconds,
           show_separator_first: this.props.show_separator_first,
           show_separator_second: this.props.show_separator_first,
           show_separator_third: this.props.show_separator_first,
           custom_days_label_text: custom_days_label_text,
           custom_hours_label_text: custom_hours_label_text,
           custom_minutes_label_text: custom_minutes_label_text,
           custom_seconds_label_text: custom_seconds_label_text,
           checkPauseInterval: this.state.checkPauseInterval,
           hide_day_leading_zero: this.props.hide_day_leading_zero,
           hide_all_leading_zero: this.props.hide_all_leading_zero,
           display_type: this.props.display_type,
           onEnd: this.timerEnd,
         };

        }

       

      //  console.log(new Date(Userdefinedatetime * 1000).toDateString(),"Time Stamp",Userdefinedatetime,"Userdefinedatetime");


        // if (CurrentDateTimeSTR >= Userdefinedatetime && this.props.timer_type === "3") {
        //   if (this.props.display_type === "circle_timer") {  
        //     return(<div>
        //             <CircleCountdown values={this.props} count={Countdown}/>
        //     </div>);            
        //   }
        // }


        if(this.props.show_time_remaining_label == "on"){
          var time_remaining_label = (
            <span
              className={"dipt_timer_remaining_label bar_time_remaining_label "}
              dangerouslySetInnerHTML={{ __html: "Timer Remaining:&nbsp;"}}
            />
          );
         }else{
          var time_remaining_label = "";
         }
        

     if (this.props.display_type === "text_timer") {  
          return (
          <div className="et_pb_countdown_timer_text">
            {time_remaining_label}
            <CountdownTimer {...settings_text} />
        </div>
          );
      }

      // This would be the timestamp you want to format
    

      if (this.props.display_type === "circle_timer") {  
       
      //   const date = new Date(Userdefinedatetime * 1000);

      //   const sec =  parseInt(this.state.seconds, 10); // convert value to number if it's string
      //   let AddDays = Math.floor(sec / (3600 * 24));
      //   let hours   = Math.floor(sec / 3600); // get hours
      //   let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
      //   let seconds = sec - (hours * 3600) - (minutes * 60);
    
      //   date.setTime(date.getTime() + (AddDays * 24 * 60 * 60 * 1000)); 
      //   date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); 
      //   date.setTime(date.getTime() + (minutes * 60 * 1000)); 
      //   date.setTime(date.getTime() + (seconds * 1000)); 


      //   Userdefinedatetime = parseFloat(
      //       Math.round(parseInt(Date.parse(date + this.props.WPtimeZoneOffset * 3600 * 1000)) / 1000)
      //     );

      // let changeFormat =  moment(new Date(Userdefinedatetime * 1000)).format('MM DD YYYY, HH:mm:ss');
     
        return (
          <div className={"et_pb_countdown_timer " + (this.state.checkPauseInterval === 1 && this.props.hide_timer == "on" ? 'timer_display_none' : '')}>
          <div className="ditp_countdown_title_text_container">
            <h4 className="title et-fb-editable-element">{this.props.title}</h4>
            </div>
            <div className="ditp_countdown_counter_container"> 
        <div className="et_pb_countdown_timer_flip">
          {circle_components}
        {/* <CircleCountdown values={this.props} count={Countdown} labels={custom_circle_time_labels}/> */}
        {/* <CountdownCircle timeTillDate={changeFormat} time={this.state.seconds} timeFormat="MM DD YYYY, h:mm a" /> */}
          </div>
          </div>
      </div>
        );
    }


      if (this.props.display_type === "flip_timer") {  

        const date = new Date();

        const sec =  parseInt(this.state.seconds, 10); // convert value to number if it's string
        let AddDays = Math.floor(sec / (3600 * 24));
        let hours   = Math.floor(sec / 3600); // get hours
        let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
        let seconds = sec - (hours * 3600) - (minutes * 60);
    
        date.setTime(date.getTime() + (AddDays * 24 * 60 * 60 * 1000)); 
        date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); 
        date.setTime(date.getTime() + (minutes * 60 * 1000)); 
        date.setTime(date.getTime() + (seconds * 1000)); 


        Userdefinedatetime = parseFloat(
            Math.round(parseInt(Date.parse(date + this.props.WPtimeZoneOffset * 3600 * 1000)) / 1000)
          );

      let changeFormat =  moment(new Date(Userdefinedatetime * 1000)).format('MM DD YYYY, h:i:s');

      console.log(changeFormat,"changeFormat");
        return (
          <div className={"et_pb_countdown_timer " + (this.state.checkPauseInterval === 1 && this.props.hide_timer == "on" ? 'timer_display_none' : '')}>
          <div className="ditp_countdown_title_text_container">
            <h4 className="title et-fb-editable-element">{this.props.title}</h4>
            </div>
            <div className="ditp_countdown_counter_container"> 
        <div className="et_pb_countdown_timer_flip">
          {/* <FlipCountdowns  values = {this.props} count={Countdown}/> */}
          {flip_compoents}
          </div>
          </div>
      </div>
        );
    }


      if (this.props.display_type === "bar_timer" ) {  
        return (
          <div className="et_pb_countdown_timer_bar">
          <BarCountdown values = {this.props} count={Countdown} />
          </div>
        );
    }

  
      return (
            
        <Fragment> 
         
          {this.state.checkPauseInterval === 1 ? <div
            className="et_pb_module et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"
            data-end-timestamp={this.props.user_defined_end_time}
          >
            {
              this.props.display_message_show_hide === 'on' ?
                (
                  <p class="message_show">
                    {this.props.show_message}
                  </p>

                ) :
                (<Fragment />)
            }
            {
              this.props.show_more_info_button === "on" ? this.timer_message_button() : (<Fragment />)
            }
          </div> : ""}
          <div className={"et_pb_countdown_timer " + (this.state.checkPauseInterval === 1 && this.props.hide_timer == "on" ? 'timer_display_none' : '')}>
          <div className="ditp_countdown_title_text_container">
            <h4 className="title et-fb-editable-element">{this.props.title}</h4>
            </div>
            <div className="ditp_countdown_counter_container">   
            <CountdownTimer {...settings} />
            </div>
          </div>
        </Fragment>
      );
    }


    if (this.props.timer_type === "1" && this.props.display_type === "countdown_timer") {
      if (this.props.expirey_mins <= 0) {
        return (
          <div
            className="et_pb_module et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"
            data-end-timestamp={this.props.date_time}
          >
            waiting for Countdown Start
          </div>
        );
      }
    }

    if (this.props.timer_type === "1" && this.props.display_type === "countdown_timer") {
      if (this.state.seconds <= 0) {
        return (
          <div
            className="et_pb_module et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"
            data-end-timestamp={this.props.user_defined_end_time}
          >
            {
              this.props.display_message_show_hide === 'on' ?
                (
                  <p class="message_show">
                    {this.props.show_message}
                  </p>

                ) :
                (<Fragment />)
            }
            {
              this.props.show_more_info_button === "on" ? this.timer_message_button() : (<Fragment />)
            }
            {
              this.props.show_more_info_button === "off" && this.props.display_message_show_hide === "off" ?
                (<Fragment>waiting for Countdown Start</Fragment>) :
                (<Fragment />)
            }
          </div>
        );

      }
    }
    // if (this.props.timer_type === "2") {
    //   if (this.props.expirey_mins <= 0 || this.props.expirey_mins > 0) {
    //     return (
    //       <div
    //         className="et_pb_module et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"
    //         data-end-timestamp={this.props.date_time}
    //       >
    //         Countdown will start soon
    //       </div>
    //     );
    //   }
    // }
    if (this.props.timer_type === "2" && this.props.display_type === "countdown_timer") {
      if (this.state.seconds <= 0 || this.state.seconds === 0) {
        return (
          <div
            className="et_pb_module et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"
            data-end-timestamp={this.props.user_defined_end_time}
          >
            {
              this.props.display_message_show_hide === 'on' ?
                (
                  <p class="message_show">
                    {this.props.show_message}
                  </p>

                ) :
                (<Fragment />)
            }
            {
              this.props.show_more_info_button === "on" ? this.timer_message_button() : (<Fragment />)
            }
            {
              this.props.show_more_info_button === "off" && this.props.display_message_show_hide === "off" ?
                (<Fragment>Countdown will start soon</Fragment>) :
                (<Fragment />)
            }
          </div>
        );

      }
    }
    if (this.props.timer_type === "3" && (this.props.display_type === "countdown_timer" || this.props.display_type === "circle_timer")) {
      
      if (this.state.seconds <= 0) { 
        return (
          <div
            className="et_pb_module et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"
            data-end-timestamp={this.fixedTimeEndDate()}
          >
            {
              this.props.display_message_show_hide === 'on' ?
                (
                  <p class="message_show">
                    {this.props.show_message}
                  </p>

                ) :
                (<Fragment />)
            }
            {
              this.props.show_more_info_button === "on" ? this.timer_message_button() : (<Fragment />)
            }
            {
              this.props.show_more_info_button === "off" && this.props.display_message_show_hide === "off" ?
                (<Fragment>waiting for Countdown Start</Fragment>) :
                (<Fragment />)
            }
          </div>
        );

      }
    }

    if(this.props.show_time_remaining_label == "on"){
      var time_remaining_label = (
        <span
          className={"dipt_timer_remaining_label bar_time_remaining_label "}
          dangerouslySetInnerHTML={{ __html: "Timer Remaining:&nbsp;"}}
        />
      );
     }else{
      var time_remaining_label = " ";
     }
    

     if (this.props.display_type === "circle_timer") {  

      // const date = new Date(Userdefinedatetime * 1000);
   
      // const sec =  parseInt(this.state.seconds, 10); // convert value to number if it's string
      // let AddDays = Math.floor(sec / (3600 * 24));
      // let hours   = Math.floor(sec / 3600); // get hours
      // let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
      // let seconds = sec - (hours * 3600) - (minutes * 60);
  
      // date.setTime(date.getTime() + (AddDays * 24 * 60 * 60 * 1000)); 
      // date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); 
      // date.setTime(date.getTime() + (minutes * 60 * 1000)); 
      // date.setTime(date.getTime() + (seconds * 1000)); 

      // Userdefinedatetime = parseFloat(
      //     Math.round(parseInt(Date.parse(date + this.props.WPtimeZoneOffset * 3600 * 1000)) / 1000)
      //   );

    // let changeFormat =  moment(new Date(Userdefinedatetime * 1000)).format('MM DD YYYY, h:mm a');

      return (
        <div className={"et_pb_countdown_timer " + (this.state.checkPauseInterval === 1 && this.props.hide_timer == "on" ? 'timer_display_none' : '')}>
        <div className="ditp_countdown_title_text_container">
          <h4 className="title et-fb-editable-element">{this.props.title}</h4>
          </div>
          <div className="ditp_countdown_counter_container"> 
      <div className="et_pb_countdown_timer_circle">
        {circle_components}
           {/* <CircleCountdown values={this.props} count={Countdown} labels={custom_circle_time_labels}/>    */}
             {/* <CountdownCircle timeTillDate={changeFormat} time={this.state.seconds} timeFormat="MM DD YYYY, h:mm a" /> */}
        </div>
        </div>
    </div>
      );
  }else if (this.props.display_type === "flip_timer") { 
    
    const date = new Date();

    const sec =  parseInt(this.state.seconds, 10); // convert value to number if it's string
    let AddDays = Math.floor(sec / (3600 * 24));
    let hours   = Math.floor(sec / 3600); // get hours
    let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
    let seconds = sec - (hours * 3600) - (minutes * 60);

    date.setTime(date.getTime() + (AddDays * 24 * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); 
    date.setTime(date.getTime() + (minutes * 60 * 1000)); 
    date.setTime(date.getTime() + (seconds * 1000)); 


    Userdefinedatetime = parseFloat(
        Math.round(parseInt(Date.parse(date + this.props.WPtimeZoneOffset * 3600 * 1000)) / 1000)
      );

  let changeFormat =  moment(new Date(Userdefinedatetime * 1000)).format('MM DD YYYY, h:ii:ss');

  console.log(changeFormat,"changeFormat");

      return (
        <div className={"et_pb_countdown_timer " + (this.state.checkPauseInterval === 1 && this.props.hide_timer == "on" ? 'timer_display_none' : '')}>
        <div className="ditp_countdown_title_text_container">
          <h4 className="title et-fb-editable-element">{this.props.title}</h4>
          </div>
          <div className="ditp_countdown_counter_container"> 
      <div className="et_pb_countdown_timer_flip">
        {/* <FlipCountdowns  values = {this.props} count={Countdown} /> */}
        {flip_compoents}
        </div>
        </div>
    </div>
      );
  }else if (this.props.display_type === "bar_timer" ) {  
      return (
        <div className="et_pb_countdown_timer_bar">
        <BarCountdown values = {this.props}  count={Countdown} />
        </div>
      );
  }else if (this.props.display_type === "text_timer" ) {  
    return (
      <div className="et_pb_countdown_timer_text">
         {time_remaining_label}
        <CountdownTimer {...settings_text} />
    </div>
      );
 }else{
    return (
      <div className="et_pb_countdown_timer ">
        <h4 className="title et-fb-editable-element">{this.props.title}</h4>
      </div>
    );
    
  }
   
  }
}

export default ditpCountdownTimer;
