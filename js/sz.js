document.writeln("<SCRIPT language=javascript>");
document.writeln("function clickHandler()");
document.writeln("{var targetId, srcElement, targetElement;srcElement = window.event.srcElement;");
document.writeln("if (srcElement.className == \"Outline\") ");
document.writeln("{targetId = srcElement.id + \"details\";targetElement = document.all(targetId);");
document.writeln("if (targetElement.style.display == \"none\")");
document.writeln("{targetElement.style.display = \"\";} ");
document.writeln("else {targetElement.style.display = \"none\";}}}");
document.writeln("document.onclick = clickHandler;");
document.writeln("<\/SCRIPT>")

function $(obj){return typeof obj=="string"?document.getElementById(obj):obj};
Object.extend=function(destination,source){for(property in source){destination[property]=source[property]}return destination};
var Class=function(){var _class=function(){this.initialize.apply(this,arguments)};for(i=0;i<arguments.length;i++){superClass=arguments[i];for(member in superClass.prototype){_class.prototype[member]=superClass.prototype[member]}};_class.child=function(){return new Class(this)};_class.extend=function(f){for(property in f){_class.prototype[property]=f[property]}};return _class};
if(!window.Element){var Element=new Object()};
Object.extend(Element,{create:function(tagName,intObject,obj){obj=$(obj);intObject=intObject||{};var newTag=document.createElement(tagName);for(var i in intObject){if(i=="style")newTag.style.cssText=intObject[i];else newTag[i]=intObject[i]}if(obj){if(arguments[3]){obj.insertBefore(newTag,obj.firstChild)}else{obj.appendChild(newTag)}}return newTag}});

function PlayerAds(adsUrl,obj,params){
	this.adsUrl=adsUrl;
	this.player=$(obj);
	params=params||{};
	this.width=params['width']||468;
	this.height=params['height']||60;
	this.timer=params['timer']||2;
	this.playerControlHeight=params['playerControlHeight']||65;
	this.swapPic=params['swapPic']||['ico_close.gif','ico_swap.gif'];
	this.zIndex=params['zIndex']||100000000;
	this.lazyTime=params['lazyTime']||0;
	this.intervalSetPos=params['intervalSetPos']||0;
	this.currectHeight=0;
	this.swapState=0;
}
PlayerAds.prototype={
	setPos:function(){
		if (typeof(arguments[0])=='number'){
			this.currectHeight=arguments[0];
		}
		if(this.adsNode.style.display!='none')
			this.adsNode.style.visibility='visible';
		this.box.style.left=parseInt((this.player.offsetWidth-this.width)/2,10);
		this.box.style.top=parseInt((this.player.offsetHeight+this.currectHeight-this.box.offsetHeight-this.playerControlHeight),10);
	},
	show:function(receiver_id){
		var receiver=arguments[0]?$(arguments[0]):this.player.parentNode;
		var html='<div style="float:right;"><img src="'+this.swapPic[0]+'" /></div><div style="clear:both"></div><iframe id="" src="'+this.adsUrl+'" width="100%" height="'+this.height+'" frameborder="0" scrolling="no" noResize></iframe>'
		this.box=Element.create('div',{
			innerHTML:html,
			style:'position:absolute;width:'+this.width+'px;background:transparent;z-index:'+this.zIndex+''
		},receiver);
		this.box.style.display='none';
		var me=this;
		
		setTimeout(function(){
			me.build();
		},this.lazyTime*1000);
	},
	build:function(){
		var me=this;
		this.box.style.display='';
		this.swapNode=this.box.childNodes[0].childNodes[0];
		this.swapNode.src=this.swapPic[0];
		this.swapNode.style.cursor='pointer';
		this.swapNode.onclick=function(){
			me.toggle(this);
		}
		this.swapHeight=this.swapNode.offsetHeight;
		this.adsNode=this.box.childNodes[2];
	
		this.setPos();
		this.lazyCloseFlag=setTimeout(function(){
			me.toggle();
		},this.timer*1000);
		if (this.intervalSetPos){
			setInterval(function(){
				me.setPos();
			},1000);
		}
	},
	toggle:function(){
		if (typeof(arguments[0]=='object')){
			clearTimeout(this.lazyCloseFlag);
		}
		if (this.swapState==0){
			this.swapNode.src=this.swapPic[1];
			this.adsNode.style.display='none';
			this.box.style.height=this.swapHeight+'px';
			this.setPos();
			this.swapState=1;
		}else{
			this.swapNode.src=this.swapPic[0];
			this.adsNode.style.display='';
			this.box.style.height=(this.height+this.swapHeight)+'px';
			this.setPos();
			this.swapState=0;
		}
	}
}