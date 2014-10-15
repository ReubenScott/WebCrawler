function GoPage(LowerNumber,UpperNumber)
{
	PageIndex=document.getElementById("page").value
	
	if(PageIndex.length>0)
	{
		if (isNaN(PageIndex))
		{
			alert('对不起，请输入数字')
			return false
		}
		else
		{
			if (parseInt(PageIndex)<LowerNumber)
			{
				alert('对不起，请输入1-'+UpperNumber+'之间的整数')
				return false
			} 
			else if(parseInt(PageIndex)>UpperNumber)
			{
				alert('对不起，请输入1-'+UpperNumber+'之间的整数')
				return false
			}
			else
			{
				this.location.href=''+PageIndex+'.html'
				return true
			}
		}
	}
	else
	{
		alert('对不起，请输入数字')
		return false
	}
	
}
