<?php

class StationList implements Countable, Iterator
{
       // Your code here
       protected $stations = [];
       protected $counter;

       public function addStation(RadioStation $station)
       {
              $this->stations[] = $station;
       }

       public function removeStation(RadioStation $toRemove)
       {
              $stationToRemove = $toRemove->getFrequency();
              $this->stations = array_filter($this->stations, function(RadioStation $station) use($stationToRemove)
       {
                     return $station->getFrequency() !== $stationToRemove;
              });
       }

       public function count(): int
       {
              return count($this->stations);
       }

       public function current(): RadioStation
       {
              return $this->stations[$this->counter];
       }

       public function key()
       {
              return $this->counter;
       }

       public function next()
       {
              $this->counter++;
       }

       public function rewind()
       {
              $this->counter = 0;
       }

       public function valid(): bool
       {
              return isset($this->stations[$this->counter]);
       }
}
