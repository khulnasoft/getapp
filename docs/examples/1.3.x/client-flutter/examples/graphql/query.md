import 'package:khulnasoft/getapp.dart';

void main() { // Init SDK
  Client client = Client();
  Graphql graphql = Graphql(client);

  client
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
  ;
  Future result = graphql.query(
    query: {},
  );

  result
    .then((response) {
      print(response);
    }).catchError((error) {
      print(error.response);
  });
}
