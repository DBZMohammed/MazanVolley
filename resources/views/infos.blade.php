@extends('layouts.app')



<form class="col-md-6">
        <div class="form-group row">
          <label for="text" class="col-md-3 col-form-label">Text :</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="text">
          </div>
        </div>
        <div class="form-group row">
          <label for="textarea" class="col-md-3 col-form-label">Textarea :</label>
          <div class="col-md-9">
            <input type="textarea" class="form-control" id="textarea">
          </div>
        </div>
        <div class="form-group row">
          <label for="select" class="col-md-3 form-control-label">Select :</label>
          <div class="col-md-9">
            <select id="select" class="form-control" >
              <option>Option 1</option>
              <option>Option 3</option>
              <option>Option 3</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col">
            <button type="submit" class="btn">Envoyer</button>
          </div>
        </div>
      </form>
