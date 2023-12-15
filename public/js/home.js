function gallery(){
    this.index=0;
    this.load=function(){
      this.rootEl = document.querySelector(".gallery");
      this.platform = this.rootEl.querySelector(".platform");
      this.frames = this.platform.querySelectorAll(".each-frame");
      this.contentArea = this.rootEl.querySelector(".content-area");      
      this.width = parseInt(this.rootEl.style.width);
      this.limit = {start:0,end:this.frames.length-1};
      this.frames.forEach(each=>{each.style.width=this.width+"px";});   
      this.goto(this.index);      
    }
    this.set_title = function(){this.rootEl.querySelector(".heading").innerText=this.frames[this.index].getAttribute("title");}
    this.next = function(){this.platform.style.right=this.width * ++this.index + "px";this.set_title();}
    this.prev = function(){this.platform.style.right=this.width * --this.index + "px";this.set_title();}
    this.goto = function(index){this.platform.style.right = this.width * index + "px";this.index=index;this.set_title();}
    this.load();
}
var G = new gallery();
  G.rootEl.addEventListener("click",function(t){
      var val = t.target.getAttribute("action");
      if(val == "next" && G.index != G.limit.end){G.next();}
      if(val == "prev" && G.index != G.limit.start){G.prev();}
      if(val == "goto"){
          let rv = t.target.getAttribute("goto");
          rv = rv == "end" ? G.limit.end:rv;
          G.goto(parseInt(rv));
      }
  });
  document.addEventListener("keyup",function(t){
      var val = t.keyCode;
      if(val == 39 && G.index != G.limit.end){G.next();}
      if(val == 37 && G.index != G.limit.start){G.prev();}
  });

  // run G.load() if new data loaded with ajax