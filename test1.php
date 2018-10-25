<html>
<head>
<script type="text/javascript">
function chkcontrol(j) {
    var total=0;
    for(var i=0; i < document.form1.ckb.length; i++){
        if(document.form1.ckb[i].checked){
            total =total +1;
        }
        if(total > 4){
            alert("Please Select only four!")
            document.form1.ckb[j].checked = false ;
            return false;
        }
    }
}
</script>

</head>
<body>
<table width="100%" border="0">
    <form action="" id="form1" name="form1">
            <tr>
              <th width="37%" height="19" align="center" bgcolor="#CCCCCC"><strong>Biological</strong></th>
              <th width="37%" align="center" bgcolor="#CCCCCC"><strong> Psychological</strong></th>
              <th width="37%" align="center" bgcolor="#CCCCCC"><strong> Social</strong></th>
            </tr>
            <tr>
              <td><input type="radio" name="Antidepressant" id="ckb" value="Antidepressant" onclick="chkcontrol(0);" />
                <label for="Antidepressant"></label>Antidepressant</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Antipsychotic oral" id="ckb" value="Antipsychotic oral" onclick="chkcontrol(1);" />
                <label for="Antipsychotic oral"></label>Antipsychotic oral</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Antipsychotic_depot" id="ckb" value="Antipsychotic depot" onclick="chkcontrol(2);" />
                <label for="Antipsychotic depot"></label>Antipsychotic depot</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Bblocker" id="ckb" value="B-blocker"  onclick="chkcontrol(3);"/>
                <label for="B-blocker"></label>B-blocker</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Benzodiazepine" id="ckb" value="Benzodiazepine"  onclick="chkcontrol(4);"/>
                <label for="Benzodiazepine"></label>Benzodiazepine</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Mood_stabiliser" id="ckb" value="Mood stabiliser"  onclick="chkcontrol(5);"/>
                <label for="Mood stabiliser"></label>Mood stabiliser</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="ECT" id="ckb" value="ECT"  onclick="chkcontrol(6);"/>
                <label for="ECT"></label>ECT</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="radio" name="Otherbio" id="ckb" value="Other"  onclick="chkcontrol(7);"/>
                <label for="Other"></label>
                Other</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
        </form>
    </table>
</body>
</html>