// External Dependencies
import React, { Component,Fragment } from 'react';
import TimePicker from 'react-time-picker';

// Internal Dependencies
import './style.css';

class Input extends Component {

  static slug = 'time_picker_type';
  constructor(props) {
    super(props);
    this.state = {input_date: props.value};
    this.handleChange = this.handleChange.bind(this);
   // this.handleSubmit = this.handleSubmit.bind(this);
  }
  handleChange = m => {
    this.setState({ input_date:m });
    this.props._onChange(this.props.name, m);

  //  console.log(m ,"value handleChange");
  };

  onTimeKeyDown(e){
    if((e.keyCode == 48 || e.keyCode == 96) && e.target.value){
        e.preventDefault()
    }else if(((e.keyCode > 48 && e.keyCode <= 57) || (e.keyCode > 96 && e.keyCode <= 105)) && e.target.value === '0'){
        e.preventDefault()
    }
};
  // handleSave = () => {
  //   console.log('saved', this.state.m.format('llll'));
    
  // };
  render() {
  //  console.log(this.setState({ m }));
// console.log(this.props.value,"lastest value");
// console.log(this.props,"DatepickerClass check update");
    return(
    <Fragment>
<div className='custom-lable-time-container'>
     <lable class="custom-lable-hour"><b>Hour</b></lable><lable class="custom-lable-mintue"><b>Minute</b></lable> 
      <TimePicker
        autoFocus
        onChange={this.handleChange}
        value={this.state.input_date}
        disableClock={true}
        format={"H:m"}   
        hourPlaceholder={"Enter Hour"} 
        minutePlaceholder={"Enter Minute"}
        minTime="00:00"
        maxTime="23:59"
        //maxTime={"23:59"}
        clearIcon={true} 
      />
    </div>
     </Fragment>
 
    );
  }
}

export default Input;
