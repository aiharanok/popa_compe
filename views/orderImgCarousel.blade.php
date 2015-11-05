          <!-- 画像スライド -->
          <div id="carousel-example" class="carousel slide">
            <!-- インジケーターの設置。下部の○●ボタン。 -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
              @if($order->list_image_filename2 != null)
                <li data-target="#carousel-example" data-slide-to="1"></li>
              @endif
              @if($order->list_image_filename3 != null)
                <li data-target="#carousel-example" data-slide-to="2"></li>
              @endif
              @if($order->list_image_filename4 != null)
                <li data-target="#carousel-example" data-slide-to="3"></li>
              @endif
              @if($order->list_image_filename5 != null)
                <li data-target="#carousel-example" data-slide-to="4"></li>
              @endif
            </ol>

            <!-- スライドの内容 -->
            <div class="carousel-inner">
              <div class="item active">
                {{HTML::image('order_images/'.$order->list_image_filename1, $order->title, array('class' => 'img-responsive center-block'))}}
              </div>
              @if($order->list_image_filename2 != null)
                <div class="item">
                  {{HTML::image('order_images/'.$order->list_image_filename2, $order->title, array('class' => 'img-responsive center-block'))}}
                </div>
              @endif
              @if($order->list_image_filename3 != null)
                <div class="item">
                  {{HTML::image('order_images/'.$order->list_image_filename3, $order->title, array('class' => 'img-responsive center-block'))}}
                </div>
              @endif
              @if($order->list_image_filename4 != null)
                <div class="item">
                  {{HTML::image('order_images/'.$order->list_image_filename4, $order->title, array('class' => 'img-responsive center-block'))}}
                </div>
              @endif
              @if($order->list_image_filename5 != null)
                <div class="item">
                  {{HTML::image('order_images/'.$order->list_image_filename5, $order->title, array('class' => 'img-responsive center-block'))}}
                </div>
              @endif
            </div>

            <!-- 左右の移動ボタン -->
            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
          </div>

