import 'dart:io';
import 'package:khulnasoft/getapp.dart';

void main() { // Init SDK
  Client client = Client();
  Storage storage = Storage(client);

  client
    .setEndpoint('https://[HOSTNAME_OR_IP]/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
  ;
  Future result = storage.createFile(
    bucketId: '[BUCKET_ID]',
    fileId: '[FILE_ID]',
    file: InputFile(path: './path-to-files/image.jpg', filename: 'image.jpg'),
  );

  result
    .then((response) {
      print(response);
    }).catchError((error) {
      print(error.response);
  });
}
