app.controller('productsCtrl', function ($scope) {
    $scope.smartphones = [
        { "title": "Galaxy Note 20", "price": 18999, "image": "resources/images/products-photo/n980_galaxy_note_20_green_9a.webp"},
        { "title": "Galaxy A51", "price": 5999, "image": "resources/images/products-photo/samsung_galaxy_a515_blue1.png" },
        { "title": "Galaxy A71", "price": 8299, "image": "resources/images/products-photo/galaxy_a715_silver_1.png" },
        { "title": "Galaxy M30s", "price": 4999, "image": "resources/images/products-photo/samsung_galaxy_m307_black1.png" },
        { "title": "Galaxy S10+", "price": 14299, "image": "resources/images/products-photo/samsung_galaxy_g975_red1.png" }
    ];

    $scope.inputLogin = "";
    $scope.inputPass = "";

    $scope.login = "admin";
    $scope.password = "admin";
    $scope.isSignIn = false;
    $scope.editing = false;


    $scope.signIn = function () {
        if ($scope.inputLogin === $scope.login) {
            if ($scope.inputPass == $scope.password) {
                $scope.isSignIn = true;
                document.getElementById('myModal').style.display = "none"
            }
        }
    };

    $scope.removeProduct = function (itemTitle) {
        const index = $scope.smartphones.findIndex(x => x.title === itemTitle);

        $scope.smartphones.splice(index, 1);

        console.log(index);
    }

    $scope.addNewSmartphone = function () {
        newSmartphone = {
            title : "Unknown",
            price : 0,
            image: "resources/images/products-photo/default.webp"
        }

        $scope.smartphones.push(newSmartphone);
    }


    $scope.orderByMe = function (item) {
        $scope.myOrderBy = item;
        $scope.reverseOrder();
    }

    $scope.myReverseBy = false;
    $scope.reverseOrder = function () {
        $scope.myReverseBy = !($scope.myReverseBy);
    }

    $scope.minValue = 0;
    $scope.maxValue = 100000;

    $scope.resetFilters = function() {
        $scope.myOrderBy = "";
        $scope.myReverseBy = false;
        $scope.minValue = 0;
        $scope.maxValue = 100000;
    }

    $scope.myFilter = function(value) {
        return (value.price >= $scope.minValue && value.price <= $scope.maxValue);
    }
});