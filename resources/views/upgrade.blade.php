@extends('layouts.app')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="wrapper">
      <div class="row" style="color: white; justify-content: center; margin: auto;">
        <div class="col-md-7">
            <h2>SELECT PAYMENT METHOD</h2>
            <form action="/payments" method="POST" class="row g-3">
              @csrf
                <div class="col-12">
                  <label class="form-label">Name On Card</label>
                  <input type="text" class="form-control" name="name_on_card" placeholder="Visa / Master" required>
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Card Number</label>
                  <input type="number" class="form-control" name="card_number" placeholder="0000 - 0000 - 0000 - 0000" pattern="[0-9.]+" required>
                </div>
                <div class="col-md-4">
                    <label for="inputMonth" class="form-label">Month</label>
                    <select name="ex_month" class="form-select">
                      <option selected>Choose Month...</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                    </select>
                </div>
                <div class="col-md-4">
                  <label for="inputYear" class="form-label">Year</label>
                  <select name="ex_year" class="form-select">
                    <option selected>Choose Year...</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputZip" class="form-label">CVV</label>
                  <input type="text" class="form-control" name="cvv" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <input type="hidden" value="{{ $price }}" name="price">
                <input type="hidden" value="{{ $name }}" name="sub_name">
                <div class="col-8">
                  <button type="submit" class="btn btn-primary">Pay Now</button>
                </div>
              </form>
        </div>
        <div class="col-md-5" style="color: black;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">ORDER SUMMARY</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><hr></h6>
                  <a class="card-link" style="text-transform: capitalize">{{$name}}</a>
                  <a class="card-link">${{$price}}</a><br><br>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nam?</p>
                  <hr>
                  <p>Total Payment : ${{ $price }}</p>
                  <hr>
                </div>
              </div>
        </div>
    </div>
    </div>

</div>