import 'package:khulnasoft/getapp.dart';

void main() { // Init SDK
  Client client = Client();
  Teams teams = Teams(client);

  client
    .setEndpoint('https://[HOSTNAME_OR_IP]/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
  ;

  Future result = teams.update(
    teamId: '[TEAM_ID]',
    name: '[NAME]',
  );

  result
    .then((response) {
      print(response);
    }).catchError((error) {
      print(error.response);
  });
}