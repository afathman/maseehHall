/*
** Automatically updates time since date based on given attributes:
** 
** startyear="", startmonth="", startday=""
** 
** Use attribute format="" to display. Formatting uses PHP syntax, but with percent signs, eg. "%Y" for 4-digit year.
** 
** Default: startyear=currentyear, startmonth=1, startday=1, format="%Y years, %n months, %j days"
**          (January 1st of current year)
*/

function update_date(){
	var nodes=document.getElementsByTagName("update");
	for(var i=0;i<nodes.length;i++){
		var ele=nodes[i];
		var d=new Date();
		var startyear=d.getFullYear(),startmonth=1,startday=1,format="%Y years, %n months, %j days";
		if(ele.hasAttribute("startyear")){startyear=parseInt(ele.getAttribute("startyear"));}
		if(ele.hasAttribute("startmonth")){startmonth=parseInt(ele.getAttribute("startmonth"));}
		if(ele.hasAttribute("startday")){startday=parseInt(ele.getAttribute("startday"));}
		if(ele.hasAttribute("format")){format=ele.getAttribute("format");}
		var diff=new Date(d-new Date(startyear,startmonth,startday,0,0,0,0));
		diff.setFullYear(diff.getFullYear()-1970);
		var dyear=diff.getFullYear(),dmonth=diff.getMonth()+1,dday=diff.getDate();
		ele.innerHTML=format
			.replace("%%","&#37;")
			.replace("%d",(dday<10?"0":"").concat(dday))
			.replace("%j",dday)
			.replace("%m",(dmonth<10?"0":"").concat(dmonth))
			.replace("%n",dmonth)
			.replace("%Y",dyear)
			.replace("%y",dyear%100)
			;
	}
	var d=new Date();
	d.setDate(d.getDate()+1);
	d.setHours(0);
	d.setMinutes(0);
	d.setSeconds(0);
	d.setMilliseconds(0);
	setTimeout(update_date,d-new Date());
}
