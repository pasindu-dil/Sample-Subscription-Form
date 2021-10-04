@extends('layouts.app')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="card">
        <div class="card-body">
          <div class="row">
              <div class="col-sm-3">
                <img src="" alt="">
              </div>
              <div class="col-sm-9">
                <h1>DILSHAN CHATHURANGA</h1>
                <p>This is your profile page.</p>
              </div>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="border-bottom: 3px solid blue">Subscription</a>
            </li>
          </ul><br>
          <div class="row text-center">
            <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h4>Silver</h4>
                    <h1 class="card-subtitle mb-2 text-muted">$ 997</h1>
                    <p class="card-text">This is the best plan for people who are starting out</p>
                    <hr>
                    <button type="button" class="btn btn-outline-primary">Payments</button><br><br>
                    <button type="button" class="btn btn-outline-success">Subscriptions</button><br><br>
                    <button type="button" class="btn btn-outline-warning">Ads</button>                    
                    <hr>
                    <button onclick="window.location='{{ url("upgrades/silver/997") }}'" type="button" class="btn btn-primary" style="color: rgb(255, 251, 251); font-weight: 800px">UPGRADE -></button>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4>Gold</h4>
                      <h1 class="card-subtitle mb-2 text-muted">$ 1997</h1>
                      <p class="card-text">This is an awesome plan for people who are starting out</p>
                      <hr>
                      <button type="button" class="btn btn-outline-primary">Payments</button><br><br>
                      <button type="button" class="btn btn-outline-success">Subscriptions</button><br><br>
                      <button type="button" class="btn btn-outline-warning">Ads</button>                    
                      <hr>
                      <button onclick="window.location='{{ url("upgrades/gold/1997") }}'" type="button" class="btn btn-primary" style="color: rgb(255, 251, 251); font-weight: 800px">UPGRADE -></button>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4>Platinum</h4>
                      <h1 class="card-subtitle mb-2 text-muted">$ 2497</h1>
                      <p class="card-text">This is the best plan for people who are starting out.</p>
                      <hr>
                      <button type="button" class="btn btn-outline-primary">Payments</button><br><br>
                      <button type="button" class="btn btn-outline-success">Subscriptions</button><br><br>
                      <button type="button" class="btn btn-outline-warning">Ads</button>                    
                      <hr>
                      <button onclick="window.location='{{ url("upgrades/platinum/2497") }}'" type="button" class="btn btn-primary" style="color: rgb(255, 251, 251); font-weight: 800px">UPGRADE -></button>
                    </div>
                  </div>
            </div>
        </div>
        </div>
      </div>
    
</div>
