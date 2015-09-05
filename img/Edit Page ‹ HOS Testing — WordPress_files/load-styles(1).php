.wp-color-picker{width:80px}.wp-picker-container .hidden{display:none}.wp-color-result{background-color:#f7f7f7;border:1px solid #ccc;-webkit-border-radius:3px;border-radius:3px;cursor:pointer;height:22px;margin:0 6px 6px 0;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;vertical-align:bottom;display:inline-block;padding-left:30px;-webkit-box-shadow:0 1px 0 rgba(0,0,0,.08);box-shadow:0 1px 0 rgba(0,0,0,.08)}.wp-color-result:after{background:#f7f7f7;-webkit-border-radius:0 2px 2px 0;border-radius:0 2px 2px 0;border-left:1px solid #ccc;color:#555;content:attr(title);display:block;font-size:11px;line-height:22px;padding:0 6px;position:relative;right:0;text-align:center;top:0;-webkit-box-shadow:inset 0 1px 0 #fff;box-shadow:inset 0 1px 0 #fff}.wp-color-result:focus,.wp-color-result:hover{background:#fafafa;border-color:#999;color:#23282d}.wp-color-result:focus:after,.wp-color-result:hover:after{color:#23282d;border-color:#a0a5aa;border-left:1px solid #999}.wp-color-result{top:0}.wp-color-result.wp-picker-open:after{content:attr(data-current)}.wp-picker-container,.wp-picker-container:active{display:inline-block;outline:0}.wp-color-result:focus{-webkit-box-shadow:0 0 0 1px #5b9dd9,0 0 2px 1px rgba(30,140,190,.8);box-shadow:0 0 0 1px #5b9dd9,0 0 2px 1px rgba(30,140,190,.8)}.wp-picker-open+.wp-picker-input-wrap{display:inline-block;vertical-align:top}.wp-picker-container .button{margin-left:6px}.wp-picker-container .iris-square-slider .ui-slider-handle:focus{background-color:#555}.wp-picker-container .iris-picker{-webkit-border-radius:0;border-radius:0;border-color:#dfdfdf;margin-top:6px}.wp-picker-container input[type=text].wp-color-picker{width:65px;font-size:12px;font-family:monospace;text-align:center;line-height:16px;margin:0}.wp-picker-container input[type=text].wp-color-picker:focus::-webkit-input-placeholder{color:transparent}.wp-picker-container input[type=text].wp-color-picker:-moz-placeholder{color:#999}.wp-picker-container input[type=text].iris-error{background-color:#ffebe8;border-color:#c00;color:#000}

.farbtastic {
  position: relative;
}

.farbtastic * {
  position: absolute;
  cursor: crosshair;
}

.farbtastic,
.farbtastic .wheel {
  width: 195px;
  height: 195px;
}

.farbtastic .color,
.farbtastic .overlay {
  top: 47px;
  left: 47px;
  width: 101px;
  height: 101px;
}

.farbtastic .wheel {
  background: url(images/wheel.png) no-repeat;
  width: 195px;
  height: 195px;
}

.farbtastic .overlay {
  background: url(images/mask.png) no-repeat;
}

.farbtastic .marker {
  width: 17px;
  height: 17px;
  margin: -8px 0 0 -8px;
  overflow: hidden;
  background: url(images/marker.png) no-repeat;
}

