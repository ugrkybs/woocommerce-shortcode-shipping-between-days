// estimated shipping date
 function twodayplus(){
	 return  date('d-M', strtotime("+2 days")); }
        add_shortcode( 'threeplusdayhortcode', 'yourFunction' );
function fivedayplus(){
	 return  date('d-M', strtotime("+5 days")); }
        add_shortcode( 'fiveplusdayhortcode', 'yourFunction' );
