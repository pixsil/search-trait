# search-trait

First version [WIP]

Add trait to your Model and add the an array with the search fields as variable.

```
protected $searchable = [
    'title',
    'author',
    'isbn',
    'price',
    'year',
];
```

Example use in Constoller:
```
// if there is searched
if ($search = $request->get('search')) {
    $books_query->search($search);
}
```
