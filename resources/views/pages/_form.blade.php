<div class="form-group col-sm-6">
                 			 <label for="name">Name</label>
                 			 <input name="name" type="text" class="form-control"           								 id="name" placeholder="Nom client" value="{{ old('name') ?? $client->name }}">
                    		{!! $errors->first('name','<p class="error-msg">:message</p>')!!}
               			</div>
               			<div class="form-group col-sm-6">
                 			<label  for="email">Email</label>
                  			<input name="email" type="Email" class="form-control" value="{{ old('email') ?? $client->email }}"	id="phone" placeholder="Email">
                     		{!! $errors->first('email','<p class="error-msg">:message</p>')!!}
               			</div>
            		</div>
            		<div class="form-row">
              			<div class="form-group col-sm-6">
                 			 <label for="password">Password</label>
                 			 <input name="password" type="password" class="form-control"
                    								 id="password" placeholder="Mot de passe">
                    		{!! $errors->first('password','<p class="error-msg">:message</p>')!!}
               			</div>
               			<div class="form-group col-sm-6">
                 			<label  for="phone">Phone</label>
                  			<input name="phone" type="text" class="form-control" value="{{ old('phone') ?? $client->phone}}"	id="phone" placeholder="phone">
                     		{!! $errors->first('phone','<p class="error-msg">:message</p>')!!}
               			</div>
            		</div>
            		<div class="form-row">
              			<div class="form-group col-sm-12">
                 			 <label for="password">Address</label>
                 			<input name="address" type="text" class="form-control" value="{{ old('address') ?? $client->address}}" id="address" placeholder="address">
                    		{!! $errors->first('address','<p class="error-msg">:message</p>') !!}
               			</div>
            		</div>
                <button type="submit" class="btn btn-primary">{{ $submitButtonText ?? ''}}</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
                </div>