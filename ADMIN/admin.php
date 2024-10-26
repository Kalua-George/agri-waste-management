<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div>whatever you guys will decide</div>
    </header>

    <main>
      <section class="aside">
        <nav>
          <a href="" id="productlink">PRODUCTS</a>
          <a href="" id="requestlink">LISTING REQUEST</a>
          <a href="" id="logslink"> SYSTEM LOGS</a>
        </nav>
      </section>
      <section class="center">
        <div id="products">
          <h3>PRODUCT ACTIONS</h3>
          <div id="addProd">
            <form action="" class="newProd">
              <div class="prod_field">
                <label for="prodName">PRODUCT NAME </label>
                <input type="text" id="prodName" required />
              </div>

              <div class="prod_field">
                <label for="prodPrice"> PRODUCT PRICE </label>
                <input type="text" id="prodPrice" required />
              </div>
              <div class="prod_field">
                <label for="contact">SELLER</label>
                <input type="text" id="contact" required />
              </div>
              <input type="submit" value="ADD" class="add" />
            </form>
          </div>
          <div id="delProd">
            <form action="" class="newProd">
              <div class="prod_field">
                <label for="prodName">PRODUCT NAME </label>
                <input type="text" id="prodName" required />
              </div>

              <div class="prod_field">
                <label for="prodPrice"> PRODUCT PRICE </label>
                <input type="text" id="prodPrice" required />
              </div>
              <div class="prod_field">
                <label for="contact">SELLER</label>
                <input type="text" id="contact" required />
              </div>

              <input type="submit" value="DELETE" class="delete"/>
            </form>
          </div>
        </div>
        <div id="requests">
          <h3>REQUESTS</h3>
          <div class="reqProd" id="reqProd">
            <table>
              <thead>
                <tr>
                  <th>Request ID</th>
                  <th>Seller Name</th>
                  <th>Product Name</th>
                  <th>Submitted At</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>John Doe</td>
                  <td>Laptop Stand</td>
                  <td>2024-10-24</td>
                  <td>
                    <button class="add" onclick="approveRequest()">
                      Approve
                    </button>
                    <button class="delete" onclick="rejectRequest()">
                      Reject
                    </button>
                  </td>
                </tr>
                <!-- More rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="logs" id="logs">
          <h3>SYSTEM  LOGS</h3>

          <div class="logs">
            <h2>User Logs</h2>
            <table>
                <thead>
                    <tr>
                        <th>Log ID</th>
                        <th>User ID</th>
                        <th>Action</th>
                        <th>Timestamp</th>
                        <th>IP Address</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample row for demo purposes -->
                    <tr>
                        <td>101</td>
                        <td>U001</td>
                        <td>Logged in</td>
                        <td>2024-10-24 09:32 AM</td>
                        <td>192.168.1.100</td>
                    </tr>
                    <!-- More rows will populate here dynamically -->
                </tbody>
            </table>
        </div>
        
          <div class="actions">
            <h2>User Actions</h2>
            <table>
              <thead>
                <tr>
                  <th>Action ID</th>
                  <th>User ID</th>
                  <th>Action Type</th>
                  <th>Description</th>
                  <th>Timestamp</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <!-- Sample row for demo purposes -->
                <tr>
                  <td>201</td>
                  <td>U001</td>
                  <td>Product Request</td>
                  <td>Submitted new product request</td>
                  <td>2024-10-24 10:32 AM</td>
                  <td>Pending</td>
                </tr>
                <!-- Additional rows populated dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
