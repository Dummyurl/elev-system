(function( $ ){
    
    $.fn.toYMD  = function(options){
        
        alert('called');
        var year, month, day;
        
        year = String(this.getFullYear());
        month = String(this.getMonth() + 1);
        
        if (month.length == 1) {
            month = "0" + month;
        }
        
        day = String(this.getDate());
        
        if (day.length == 1) {
            day = "0" + day;
        }
        
        return year + "-" + month + "-" + day;
        
    };
    
}( jQuery ));

