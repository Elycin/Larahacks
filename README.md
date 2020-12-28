# Larahacks
A bunch of hacks and tweaks that you can use in your Laravel project.


## Models

### Traits
You can use traits by appending `use {TraitName};` inside of your model class.


- [Write Through Cache](https://github.com/Elycin/Larahacks/blob/main/Traits/WriteThroughCache.php)  
A write through cache is extremely reliable in situations where you are heavily dependent on the usage of the cache. Requires that you have a taggable store.
