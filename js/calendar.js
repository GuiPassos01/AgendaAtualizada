function calendario(month){

	// CHAMA TODAS AS DATAS ATUAIS
	var data = new Date();
	var dia = data.getDate();
	var mes = data.getMonth();
	var ano = data.getFullYear();

	// LISTAS DOS MESES E DIAS FINAIS DOS MESES
	meses = new Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
	mesesDias = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

	// CONDIÇÃO DE EXISTENCIA ANO BISSEXTO
	if((ano % 4 == 0)){
		mesesDias[1] = 29;
	}

	// MES
	var mesNoCodigo = mes;
	mes = month;

	total = dias_no_mes[mes];

	var dia_hoje = dia+' '+meses[mes]+' '+ano; // 24-10

	oct = data; //data de hoje(?)

	if(mes > 0) {
		soma = 0;
		for(var m=0; m<mes; m++){
			soma += dias_no_mes[m];
		}
		oct.setDate(soma+1);
	}	
	else{
		oct.setDate(1);
	}


	if (oct.getDate()==2) {
		oct=setDate(0);
	}
	oct = oct.getDay();

	document.write('<table class="cal_calendar"><tr><th colspan="7">'+ meses[month]+' '+ano+'</th></tr><br>');
	document.write('<tr class="cal_d_weeks"><th>Dim</th><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th></tr><tr>'); 
	semana = 0;

	for(i=1;i<=oct;i++){
		var mesanterior = meses[mes-1];

		document.write('<tb><div class ="divday" />'+(dias_no_mes[mes-1]-oct+i)+'</div></td>');
		semana++;
	}

	for(i=1;i<=total; i++){
		if(semana==0){
			document.write("<tr>");
		}

		if (dia==i && mesNoCodigo==mes) {

			document.write("<tb><b><div class ='divtoday' onclick='open_popup(\""+i+" "+meses[mes]+"\")' href='#'>"+i+"</div><b></td>");
		}
		else{

			document.write("<td><div class ='divday' onclick='open_popup(\""+i+" "+months[month]+"\")' href='#'>"+i+"</div></td>");

		}
		semana++;
		if (semana==7) {

			document.write('</tr>');
			semana=0;
		}
	}

	for(i=1;semana!=0;i++){

		var proximomes = meses[mes+1];
		document.write('<tb><div class ="divday">'+i+'</td>');
		semana++;
		if(semana==7){
			document.write('</tr>');
			semana=0;
		}
	}
	document.write('</table>');
}

