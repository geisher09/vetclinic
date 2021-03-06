
	/************* background, header, nav bar, title bar, main div *************/
	body { 
		background: url(<?php echo base_url('assets/images/background6.png')?>) no-repeat center center fixed; 
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
		text-align: center; font-family: Helvetica; font-size: 15.5px; 
		transition: 0.3s; border-bottom: 2px solid #404040;
	}
	#menu li a:hover {  color:#f2f2f2; background-color:#333333; border-bottom:2px solid #f2f2f2;}
	#menu li a:focus { color: #66a3ff; border-bottom:2px solid #66a3ff;}
	#title{
		font-family: Cambria; font-size: 31px; padding:2px;
		background-color:#f2f2f2; -webkit-text-stroke: 0.5px black; color: #3385ff;
	}
	#container{
		padding: 0;
		width: 80%;
		margin: 30px auto 70px auto;
	}
	
	/************* home page *************/
	#addbtn {
		display: inline-block;
		font-size: 17px;
		margin-bottom: 15px;
		cursor: pointer;
		float: right;
	}
	#mytable{
		width: 100%;
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
		padding:5px;
	}
	#mytable tr:hover{
		background-color:rgba(255,255,255,0.3);
	}
	
	.btn { outline:none; }
	
	/************* add new page *************/
	label{
		font-size: 17px;
		font-family: helvetica;
		text-align:right;
	}
	input[type=radio]{ cursor: pointer;}
	
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
		background-color: #3399FF;
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
		margin: 0px 75px 20px 40px;
	}
	
	/************* modal *************/
	#registermodal{
		background-color:rgba(255,255,255,0.9);
		border-radius:5px;
	}