// External Dependencies
import React, { Component,Fragment } from 'react';
import TimePicker from 'react-time-picker';

// Internal Dependencies
import './style.css';

class StartTimeRecurring extends Component {

  static slug = 'start_time_recurring';
  constructor(props) {
    super(props);
    this.state = {input_date: props.value};
    this.handleChange = this.handleChange.bind(this);
   // this.handleSubmit = this.handleSubmit.bind(this);
  }
  handleChange = m => {
    this.setState({ input_date:m });
    this.props._onChange(this.props.name, m);
    console.log(m,"handleChange StartTimeRecurring");
  
  };

 
  // handleSave = () => {
  //   console.log('saved', this.state.m.format('llll'));
    
  // };
  render() {
  //  console.log(this.setState({ m }));
console.log(this.props.value,"lastest value");
console.log(this.props,"DatepickerClass check update");


    return(
    <Fragment>
<div>
<TimePicker
        onChange={this.handleChange}
        value={this.state.input_date}
         disableClock={true}
         format={"H:m"}   
         hourPlaceholder={"Hour"} 
         minutePlaceholder={"Minute"}
        //  required={true}
         maxTime={"23:59"}
        clearIcon={true}
      />
    </div>
     </Fragment>
 
    );
  }
}

export default StartTimeRecurring;
