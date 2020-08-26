/*"A".charCodeAt(0);
65
"Z".charCodeAt(0);
90
String.fromCharCode(60);
"<"
for(let i="A".charCodeAt(0);i<="Z".charCodeAt(0);i++){
    console.log(String.fromCharCode(i));
	}
*/	
	function toStraightUpCase(str)
	{
		let newStr='';
		for(let i=0;i<str.length;i++)
		{
			//if(!str[i]<"a" || !str[i]>"z")
			if(str[i]>="a" && str[i]<="z")
				newStr+=String.fromCharCode(str.charCodeAt(i)-32);
			else
			newStr+=str[i];
		}
		return newStr;
	}
	function toStraightDownCase(str)
	{
		let newStr='';
		for(let i=0;i<str.length;i++)
		{
			//if(!str[i]<"a" || !str[i]>"z")
			if(str[i]>="A" && str[i]<="Z")
				newStr+=String.fromCharCode(str.charCodeAt(i)+32);
			else
			newStr+=str[i];
		}
		return newStr;
	}
	/*
	 var testString = "i AM a CrAzy StrINg, MAkE mE nORMal!";
	 toStraightUpCase(testString);
	 */