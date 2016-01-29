
var DropDown = {
  initEvents : function() {
    'use strict';
    var obj = this;

    obj.dd.on('click', function(event){
      $(this).toggleClass('active');
      return false;
    });

    obj.opts.on('click',function(){
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text('Gender: ' + obj.val);
    });
  },
  getValue : function() {
    'use strict';
    return this.val;
  },
  getIndex : function() {
    'use strict';
    return this.index;
  }
};
