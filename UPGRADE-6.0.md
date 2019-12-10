UPGRADE FROM 5.0 to 6.0
=======================

### Elastica library changes
The bundle now works with Elastica version 7.
Please consider [their changelog for an upgrade guide](https://github.com/ruflin/Elastica/blob/master/CHANGELOG.md).
One of the implications is that it also needs Elasticsearch version 7.

### Event Changes
 * Removed `TransformEvent::PRE_TRANSFORM` and `TransformEvent::POST_TRANSFORM` constants. Use `PreTransformEvent::class` and `PostTransformEvent::class` instead.

   Before:
   ```php
   public static function getSubscribedEvents()
   {
       return array(
           TransformEvent::PRE_TRANSFORM => 'doPreTransform',
           TransformEvent::POST_TRANSFORM => 'doPostTransform',
       );
   }
   ```

   After:
   ```php
   public static function getSubscribedEvents()
   {
       return array(
           PreTransformEvent::class => 'doPreTransform',
           PostTransformEvent::class => 'doPostTransform',
       );
   }
   ```
