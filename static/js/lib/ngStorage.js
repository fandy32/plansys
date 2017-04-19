'use strict';(function(){angular.module('ngStorage',[]).factory('$localStorage',_storageFactory('localStorage')).factory('$sessionStorage',_storageFactory('sessionStorage'));function _storageFactory(storageType){return['$rootScope','$window','$log',function($rootScope,$window,$log){var webStorage=$window[storageType]||($log.warn('This browser does not support Web Storage!'),{}),$storage={$default:function(items){for(var k in items){angular.isDefined($storage[k])||($storage[k]=items[k]);}
return $storage;},$reset:function(items){for(var k in $storage){'$'===k[0]||delete $storage[k];}
return $storage.$default(items);}},_last$storage,_debounce;for(var i=0,k;i<webStorage.length;i++){(k=webStorage.key(i))&&'ngStorage-'===k.slice(0,10)&&($storage[k.slice(10)]=angular.fromJson(webStorage.getItem(k)));}
_last$storage=angular.copy($storage);$rootScope.$watch(function(){_debounce||(_debounce=setTimeout(function(){_debounce=null;if(!angular.equals($storage,_last$storage)){angular.forEach($storage,function(v,k){angular.isDefined(v)&&'$'!==k[0]&&webStorage.setItem('ngStorage-'+k,angular.toJson(v));delete _last$storage[k];});for(var k in _last$storage){webStorage.removeItem('ngStorage-'+k);}
_last$storage=angular.copy($storage);}},100));});'localStorage'===storageType&&$window.addEventListener&&$window.addEventListener('storage',function(event){if('ngStorage-'===event.key.slice(0,10)){event.newValue?$storage[event.key.slice(10)]=angular.fromJson(event.newValue):delete $storage[event.key.slice(10)];_last$storage=angular.copy($storage);$rootScope.$apply();}});return $storage;}];}})();