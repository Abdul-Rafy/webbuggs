// External Dependencies
import React, { Component,Fragment } from 'react';
import $ from "jquery";

// Internal Dependencies
import './style.css';

class MintueInput extends Component {

  static slug = 'custom_mintune_input';
  constructor(props) {
    super(props);
  }

  render() {
  //  console.log(this.setState({ m }));

    return(
    <Fragment>
     <div className="et-fb-input-time-col et-fb-input-time-col-2 dtm-minute-input">
       <label className="et-fb-form__label">Minute</label><input type="number" min="0" max="59" step="1"   className="et-fb-settings-option-input et-fb-input-time-minute-input" name="input-time-minute"
        value="00" /></div>
     </Fragment>
 
    );
  }
}

export default MintueInput;
