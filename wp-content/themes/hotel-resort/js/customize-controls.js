( function( api ) {

	// Extends our custom "hotel-resort" section.
	api.sectionConstructor['hotel-resort'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );