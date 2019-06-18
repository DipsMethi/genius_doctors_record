define(['MindFusion.Scheduling'], function(mfScheduleing){
  var calendar = new mfScheduleing.Calendar(document.getElementById('calendar'));
  calendar.monthSettings.showPaddingDays  = false;
  calendar.currentView = mfScheduleing.CalendarView.SingleMonth;
  calendar.theme = "standard";

  var resource;

  // add some contacts to the schedule.contacts collection
  resource = new mfScheduleing.Contact();
  resource.firstName = "Emmy";
  resource.lastName = "Noether";
  calendar.schedule.contacts.add(resource);

  resource = new mfScheduleing.Contact();
  resource.firstName = "Ernest";
  resource.lastName = "Henley";
  calendar.schedule.contacts.add(resource);

  // add some locations to the schedule.locations collection
  resource = new mfScheduleing.Location();
  resource.name = "Pretoria";
  calendar.schedule.locations.add(resource);

  resource = new mfScheduleing.Location();
  resource.name = "Midrand";
  calendar.schedule.locations.add(resource);

  calendar.render();
  /**
  * Loads the schedule from a JSON file
  * @param {String} jsonString the JSON string
  */
  calendar.loadFromJSON = function(jsonString){
    var data = JSON.parse(jsonString);

    for (item in data){

      var newItem = new mfScheduleing.Item();
      newItem.subject = data[item].Subject;
      newItem.details = data[item].Details;
      newItem.contacts = data[item].Contacts;
      newItem.location = data[item].Location;
      newItem.Task = data[item].Task;
      newItem.resources = data[item].Resources;
      newItem.startTime = new mfScheduleing.DateTime(new Date(data[item].StartTime));
      newItem.endTime = new mfScheduleing.DateTime(new Date(data[item].EndTime));

      calendar.schedule.items.add(newItem);
    }

    calendar.repaint();
  }

  return calendar;
});
