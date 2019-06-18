requirejs.config({
  paths:{
    calendar: './app/calendar',
    server: './app/server',
    'MindFusion.Scheduling': './lib/MindFusion.Scheduling'
  }
});

require(['MindFusion.Scheduling', 'calendar', 'server'], function(msScheduling, calendar, server){

    server.getItems(calendar.loadFromJSON);

    calendar.itemCreated.addEventListener(
      function(sender, args){
        server.addItem(args.item);
      });

    calendar.itemDeleted.addEventListener(
      function(sender, args){
        server.deleteItem(args.item);
      });

});
