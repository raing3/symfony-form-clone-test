Simple example repository to see difference between cloning and using the form builder to create the entry child forms
in a CollectionType.

## Usage

```
composer install
php index.php
```

Tweak the arguments to the benchmark function to compare the old vs. new flow and impact at different child counts.

eg:

```php
<?php

# Clone entry forms with 5000 instances:
benchmark($formFactory, ['clone_entry_instance' => true], 5000);

# Use form builder to create entry forms with 5000 instances:
benchmark($formFactory, ['clone_entry_instance' => false], 5000);
```

## Results

Environment: Macbook of some kind with PHP 7.3.

```
# clone_entry_instance = true, 5000 children
^ "Time (sec): 20.07727098465"
^ "After memory usage (MB): 104"
^ "Memory diff (MB): 94"

# clone_entry_instance = false, 5000 children
^ "Time (sec): 43.438263893127"
^ "After memory usage (MB): 678"
^ "Memory diff (MB): 668"

# clone_entry_instance = true, 10 children
^ "Time (sec): 0.054184913635254"
^ "After memory usage (MB): 6"
^ "Memory diff (MB): 0"

# clone_entry_instance = false, 10 children
^ "Time (sec): 0.083252906799316"
^ "After memory usage (MB): 8"
^ "Memory diff (MB): 2"
```
