import 'package:khulnasoft/getapp.dart';

Client client = Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2'); // Your project ID

Account account = Account(client);

await account.deleteIdentity(
    identityId: '<IDENTITY_ID>',
);
