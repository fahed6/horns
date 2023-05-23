( function( api ) {

	// Extends our custom "vw-dark" section.
	api.sectionConstructor['vw-dark'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );