	<title>Transilien</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="<URL_PATH>/styles/favicon/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="<URL_PATH>/styles/favicon/favicon.ico" />
	<link rel="icon" type="image/png" href="<URL_PATH>/styles/favicon/favicon.png" />
	<link rel="stylesheet" href="<URL_PATH>/styles/main.css" media="screen, projection" />
	<!--<link rel="stylesheet" href="<URL_PATH>/styles/print.css" media="print" />-->
	<!-- styles additionnels -->
	<EXTRA_STYLES>
	<!-- /styles additionnels -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.8.14.custom.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var $gares = [
                {
                    value: "abbesses",
                    label: "Abbesses",
                    code: "5500001",
                    available: 1,
                    city: "Paris"
                },
                {
                    value: "ablon",
                    label: "Ablon",
                    code: "8754526",
                    available: 0,
                    city: "Ablon-sur-Seine"
                },
                {
                    value: "ACHERES GRAND CORMIER",
                    label: "Achères Grand Cormier",
                    code: "8738605",
                    available: 1,
                    city:  "Saint-Germain-en-Laye"
                },
                {
                    value: "AEROPORT CHARLES DE GAULLE  1",
                    label: "Aéroport Charles de Gaulle  1 - Roissy",
                    code: "8727146",
                    available: 1,
                    city:  "Tremblay-en-France"
                },
                {
                    value: "alesia",
                    label: "Alésia",
                    code: "5500002",
                    available: 1,
                    city:  "Paris"
                }
            ];
            $( "#gares" ).autocomplete({
                source: $gares
            }).data( "autocomplete" )._renderItem = function( ul, item ) {
                if (item.available) {
                    var re = new RegExp(this.term, "i") ;
                    var t = item.label.replace(re,"<span class='highlighted'>$&</span>");
                    return $( "<li></li>" )
                    .data( "item.autocomplete", item )
                    .append( "<a>" + t + "</a>" )
                    .appendTo( ul );				
                }
                else{
                    return $( "<li></li>" )
                    .data( "item.autocomplete", item )
                    .append( "<span class='not-available'>" + item.label + " <span class='asterisk'>*</span></span>" )
                    .appendTo( ul );						
                }			
            };
        });
   	 </script>