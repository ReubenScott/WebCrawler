function GoPage(LowerNumber,UpperNumber)
{
	PageIndex=document.getElementById("page").value
	
	if(PageIndex.length>0)
	{
		if (isNaN(PageIndex))
		{
			alert('�Բ�������������')
			return false
		}
		else
		{
			if (parseInt(PageIndex)<LowerNumber)
			{
				alert('�Բ���������1-'+UpperNumber+'֮�������')
				return false
			} 
			else if(parseInt(PageIndex)>UpperNumber)
			{
				alert('�Բ���������1-'+UpperNumber+'֮�������')
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
		alert('�Բ�������������')
		return false
	}
	
}
