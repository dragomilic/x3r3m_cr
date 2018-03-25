function _param(url,method,params,dataPost,upload){
	var passParameters = {};
      passParameters.url = url;

      if (typeof method == 'undefined'){
        passParameters.method = 'GET';
      }else{
        passParameters.method = method;
      }

      if (typeof params != 'undefined'){
        passParameters.params = params;
      }

      if (typeof dataPost != 'undefined'){
        passParameters.data = dataPost;
      }

      if (typeof upload != 'undefined'){
         passParameters.upload = upload;
      }

    return passParameters;
}