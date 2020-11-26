<?php

interface Filter
{
  public function getFilter();
}

class BAndWFilter implements Filter
{
  //  Your code here
  public function getFilter()
  {
    return get_class();
  }
}

class SepiaFilter implements Filter
{
  //  Your code here
  public function getFilter()
  {
    return get_class();
  }
}
