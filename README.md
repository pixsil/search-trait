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
$books_query = Book::query();

// if there is searched
if ($search = $request->get('search')) {
    $books_query->search($search);
}

// get all data
$books_pagination = $books_query->paginate(10);

return $books_pagination;
```
