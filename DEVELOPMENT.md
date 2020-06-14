# Development notes
Some notes important for developers.

## Prefix
Since PHP has a global namespace, where required we use the prefix `swev`, short for *sw*ingin *ev*ents.

## Data structures
We want to associate events with their occurrences. An event, like a course, can have many occurrences at different dates and places.

Users should be able to manage the occurrences of an event easily; adding new occurrences and deleting certain ones should be possible in batch.

Events themselves can be modeled as a custom post type, since they will have a title and a description.

Occurrences will have to refer to their events, so they probably do not fit existing structures well and require their own table.