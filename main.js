// main.js
var client = new ZeroClipboard( $("#click-to-copy"), {
  moviePath: "ZeroClipboard.swf"
} );

client.on( "load", function(client)
{
    $('#flash-loaded').fadeIn();

    client.on( "complete", function(client, args) {
        client.setText( "Set text copied." );
        $('#click-to-copy-text').fadeIn();
    } );
} );