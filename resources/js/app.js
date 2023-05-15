require('./bootstrap');


(function() {
    const Home = function() {
        return new Home.init();
    }
    Home.init = function() {
        $D.init.call(this);
        this.$tbl_dashboard = "";
        this.ID = 0;
        this.token = $("meta[name=csrf-token]").attr("content");
    }
    Home.prototype = {


    }
    Home.init.prototype = $.extend(Home.prototype, $D.init.prototype);
    Home.init.prototype = Home.prototype;

    $(document).ready(function() {
        var _Home = Home();

        $('#directBio').on('click',function () {
            console.log('yeahh');
        });
        
    });
})();




window.history.forward();

function noBack() {
    window.history.forward();
}
setTimeout("noBack()", 0);
window.onunload = function() { null };
