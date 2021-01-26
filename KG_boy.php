<html>
<head>
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<!-- dialogflow style bootsrap -->
	<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
	<!-- Jquery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		//To minimise the height of chatbox
		$(document).ready(function() {
			window.addEventListener('dfMessengerLoaded', function (event) {
			$r1 = document.querySelector("df-messenger");
			$r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
			$r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); 
			var sheet = new CSSStyleSheet;
			// manage box height from here
			sheet.replaceSync( `div.chat-wrapper[opened="true"] { height: 450px }`);
			$r2.shadowRoot.adoptedStyleSheets = [ sheet ];
			});
		});
	</script>
	<style>
			/* custom css for chatbox */
			/* find it here : https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger */
			df-messenger {
				--df-messenger-bot-message: #bdfcbf;
				--df-messenger-button-titlebar-color: #7ec472;
				--df-messenger-chat-background-color: #fafafa;
				--df-messenger-font-color: black;
				--df-messenger-send-icon: #7ec472;
				--df-messenger-user-message: #7ec472;
			}
  
	</style>

</head>
<body>

	<!-- This is the main code for chatbot  -->
	<!-- we can add more fields refer: https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger -->
	<df-messenger	
		intent="WELCOME"
		chat-icon = "https://cdn.iconscout.com/icon/premium/png-512-thumb/chatbot-4-683088.png"
		chat-title="KG Boy"
		agent-id="4866338e-dd28-4491-82fe-056daa4f8d5b"
		language-code="en"
	>
	</df-messenger>
	

</body>

</html>

