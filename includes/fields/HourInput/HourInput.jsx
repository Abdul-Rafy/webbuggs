// External Dependencies
import React, { Component,Fragment } from 'react';
import $ from "jquery";
// Internal Dependencies
import './style.css';

class HourInput extends Component {

  static slug = 'custom_hour_input';
  constructor(props) {
    super(props);
  }

  componentDidMount() {
   
    $('.dtm-hour-input').addClass("test");
   // $('.dtm-hour-input').css({"display": "inline-block;", "width": "50%;"});
  }
  
  render() {
 
    return(
    <Fragment>
    <div className='dtm-hour-input'>
    <label className="">Hour</label>
    <input type="number" min="0" max="23" step="1"  className="" name=""
      value="00"    /> : 
    </div>
     </Fragment>
 
    );
  }

 

}

export default HourInput;
