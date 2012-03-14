(function(a){Formwatcher.Validators.push(Formwatcher.Validator.extend({name:"Integer",description:"Makes sure a value is an integer",classNames:["validate-integer"],validate:function(a){return a.replace(/\d*/,"")!=""?"Has to be a number.":!0},sanitize:function(b){return a.trim(b)}})),Formwatcher.Validators
.push(Formwatcher.Validator.extend({name:"Required",description:"Makes sure the value is not blank (nothing or spaces).",classNames:["required"],validate:function(b,c){return c.attr("type")==="checkbox"&&!c.is(":checked")||!a.trim(b)?"Can not be blank.":!0}})),Formwatcher.Validators.push(Formwatcher.
Validator.extend({name:"NotZero",description:"Makes sure the value is not 0.",classNames:["not-zero"],validate:function(a){var b=parseInt(a);return!isNaN(b)&&b==0?"Can not be 0.":!0}})),Formwatcher.Validators.push(Formwatcher.Validator.extend({name:"Email",description:"Makes sure the value is an email."
,classNames:["validate-email"],validate:function(a){var b=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;return a.match(b)?!0:"Must be a valid email address."},sanitize:function(b){return a.trim
(b)}})),Formwatcher.Validators.push(Formwatcher.Validator.extend({name:"Float",description:"Makes sure a value is a float",classNames:["validate-float"],defaultOptions:{decimalMark:","},validate:function(a){Formwatcher.debug("/\\d+(\\"+this.options.decimalMark+"\\d+)?/","g");var b=new RegExp("\\d+(\\"+
this.options.decimalMark+"\\d+)?");return a.replace(b,"")!=""?"Has to be a number.":!0},sanitize:function(b){return b.indexOf(".")>=0&&b.indexOf(",")>=0&&(b.lastIndexOf(",")>b.lastIndexOf(".")?b=b.replace(/\./g,""):b=b.replace(/\,/g,"")),b.indexOf(",")>=0&&(b=b.replace(/\,/g,".")),b.indexOf(".")!=b.lastIndexOf
(".")&&(b=b.replace(/\./g,"")),b=b.replace(/\./g,this.options.decimalMark),a.trim(b)}}))})(jQuery);