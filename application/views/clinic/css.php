<style type="text/css">

	/************* background, header, nav bar, title bar, main div *************/
	body { 
		background: url(background6.png) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.logo{
		height: 40px;
		width: 40px;
		margin: 5px;
		float:left;
		border-radius: 10px;
	}
	#menu {
		list-style-type: none; margin: 0; padding: 0; width: 100%;
		background-color: #404040;  overflow: hidden;
		position: fixed; top: 0;
	}
	#menu li a {
		display: block; color: #f2f2f2; text-decoration: none; padding-top:17px;
		text-align: center; font-family: Arial; font-size: 16px; 
		transition: 0.3s; border-bottom: 2px solid #404040;
	}
	#menu li a:hover {  color:#f2f2f2; background-color:#404040; border-bottom:2px solid #f2f2f2;}
	#menu li a:focus { color: #66a3ff; border-bottom:2px solid #66a3ff;}
	#title{
		font-family: Cambria; font-size: 31px; padding:2px;
		background-color:#f2f2f2; -webkit-text-stroke: 0.5px black; color: #3385ff;
	}
	#container{
		padding: 0;
		width: 65%;
		margin: 100px auto 70px auto;
	}
	
	/************* home page *************/
	.button {
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 17px;
		margin-bottom: 15px;
		cursor: pointer;
		float: right;
	}
	.effects {
		background-color: #0088CC; 
		color:#fff; 
		border: 2px solid #0088CC;
		border-radius: 10px;
		transition: 0.1s;
	}
	.effects:hover{
		border: 2px solid #006699;
		background-color: #006699;
		color: #fff;
	}
	#mytable{
		width: 100%;
		font-family: Arial;
		border-collapse: collapse;
		overflow: auto;
		margin-top: 10px;
	}
	#mytable th{
		background-color: #3399FF;
		color: white;
		height: 30px;
		font-size: 18px;
		padding: 2px 6px;
		border-bottom: 1px solid #000;
		border-top: 1px solid #000;
		text-align: left;
	}
	#mytable td{
		border-bottom: 1px solid #CCC;
		padding: 2px 6px;
		height: 15px;
	}
	input[type=button].viewdet {
		color: #0077B3;
		background-color: transparent;
		border: none;
		cursor: pointer;
		height:35px;
		font-weight: bold;
		font-size: 15.5px;
	}
	
	
	/************* detail page *************/
	#detailtable{
		width: 100%;
		font-family: Arial;
		border-collapse: collapse;
		overflow: auto;
		margin-top: 10px;
	}
	#detailtable th {
		color: #1a8cff;
		height: 30px;
		padding: 2px 6px;
		font-size:20px;
		font-family:Tahoma;
	}
	#detailtable td{
		height: 25px;
		vertical-align: top;
	}	
	
	/************* add new page *************/
	div.addform{
		background-color: rgba(255,255,255,0.3);
		margin: 90px auto 70px auto;
		padding-bottom: 40px;
		width: 70%;
		border: 1px solid #B3B3B3;
	}
	div.title{
		background-color: #3399FF ;
		width: 100%;
		height: 40px;
		padding-top: 10px;
	}
	label{
		font-size: 18px;
		font-family: Tahoma;
	}
	td { padding: 10px; }
	.effects2 {
		background-color: #006699; 
		color: white;
		border: 2px solid white;
		font-weight: bold;
	}
	.effects2:hover {
		border: 2px solid #006699;
		background-color: #FFF;
		color: #006699;
	}
	input[type=submit]{
		font-size: 18px;
		padding: 5px;
		width: 150px;
		height: 40px;
		transition: 0.3s;
		border-radius: 10px;
		cursor: pointer;
	}
	input[type=checkbox]{ cursor: pointer;}
	
	/************* patient and client page *************/
	#patientclienttable{
		width: 100%;
		font-family: Arial;
		border-collapse: collapse;
		overflow: auto;
	}
	#patientclienttable th {
		background-color: #3399FF;
		color: white;
		height: 30px;
		padding: 2px 6px;
		border-bottom: 1px solid #000;
		border-top: 1px solid #000;
		text-align: left;
	}
	#patientclienttable td{
		border-bottom: 1px solid #CCC;
		padding: 5px 6px;
		height: 20px;
	}
	
	/************* search bars *************/
	input[type=text]#search {
		width: 100%;
		height: 10px;
		outline:none;
		border: 1px solid #404040;
		font-size: 16px;
		background-color: #404040;
		border-radius:2px;
		padding: 15px 5px;
		margin: 11px 0px 10px 10px;
		transition: 0.5s;
		align:right;
	}
	input[type=text]#search:hover,
	input[type=text]#search:focus{
		border: 1px solid #F2F2F2;
		background-color: #FFFFFF;
	}
	
	/************* inventory page *************/
	#inventorytable {
		width: 100%;
		font-family: Arial;
		border-collapse: collapse;
		overflow: auto;
		margin-bottom: 30px;
	}
	
	#inventorytable  th {
		
		background-color: black;
		color: white;
		height: 35px;
		padding: 2px 6px;
		border-bottom: 1px solid #000;
		border-top: 1px solid #000;
		text-align: left;
	}
	#inventorytable  td{
		border-bottom: 1px solid #CCC;
		padding: 5px 6px;
		height: 20px;
	}
	
	/************* schedule page *************/
	#back{
		padding: 0;
		height: 550px;
		width: 44%;
		margin: 60px 75px 20px 40px;
	}
	
	

</style>